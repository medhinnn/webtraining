<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "admin page - product - Online Store";
        return view('admin.product.create')->with("viewData", $viewData);

    }
    public function store(request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image",
        ]);
        $newProduct = new Product();
        $newProduct->name = $request->input("name");
        $newProduct->description = $request->input("description");
        $newProduct->price = $request->input("price");
        $newProduct->image = ("image");
        $newProduct->save();
        if ($request->hasFile('image')) {
            $imageName = $newProduct->id . "." . $request->file('image')->Extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->image = $imageName;
            $newProduct->save();
        }
        return redirect()->route("admin.product.index");

    }
    public function delete($id)
    {
        Product::destroy($id);
        return back()->with("success", "sucess");


    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"] . " - Online Store";
        $viewData["subtitle"] = $product["name"] . " - Product information";
        $viewData["product"] = $product;
        return view('admin.product.show')->with("viewData", $viewData);
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "admin page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);

    }
    public function update(request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image",
        ]);
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $imageName = $product->id . "." . $request->file('image')->Extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route("admin.product.index");
      
    }
}
