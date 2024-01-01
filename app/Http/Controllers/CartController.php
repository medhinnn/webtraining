<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index( request $request )
    {
      $total= 0;
      $productsInCart = [];
      $productsInSession = $request->session()->get("products");
      if($productsInSession){
        $productsInCart = Product::findMany(array_keys($productsInSession));
        $total = Product::sumPriceByQuantities($productsInCart,$productsInSession);
   }
   $viewData=[];
   $viewData["title"]="cart-online-store";
   $viewData["subtitle"]="shoping cart";
   $viewData["total"]=$total;
   $viewData["products"]=$productsInCart;
   return view("cart.index", $viewData)->with("viewData", $viewData);
   }  
   public function add( Request $request, $id ){
    $products = $request->session()->get("products");
    $products[$id]= $request->input("Quantity");
    $request->session()->put("products" ,$products);
        return redirect()->route('cart.index');
    
   }
   public function delete( Request $request){
   
    $request->session()->forget("products");
        return back();
    
   }
   public function purchase(Request $request)
   {
       $productsInSession = $request->session()->get("products");
       if ($productsInSession) {
           $userId = Auth::user()->id;
           $order = new Order();
           $order->user_id = $userId;
           $order->total = 0;
           $order->save();
           $total = 0;
           $productsInCart = Product::findMany(array_keys($productsInSession));


           foreach ($productsInCart as $product) {
               $quantity = $productsInSession[$product->id];
               $item = new Item();
               $item->quantity = $quantity;
               $item->price = $product->price;
               $item->product_id = $product->id;
               $item->order_id = $order->id;
               $item->save();
               $total = $total + ($product->price * $quantity);
           }


           $order->total = $total;
           $order->save();


           $newBalance = Auth::user()->balance - $total;
           Auth::user()->balance = $newBalance;
           Auth::user()->save();


           $request->session()->forget('products');
           $viewData = [];
           $viewData["title"] = "Purchase - Online Store";
           $viewData["subtitle"] = "Purchase Status";
           $viewData["order"] = $order;
           return view('cart.purchase')->with("viewData", $viewData);
       } else {
           return redirect()->route('cart.index');
       }
   }

}

 //
 