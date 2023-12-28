<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Product;


class ProductController extends Controller
{
    // public static $products = [
    //     ["id" => "1", "name" => "TV", "description" => "Best TV", "image" => "game.png", "price" => "1000"],
    //     ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "image" => "safe.png", "price" => "999"],
    //     ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "image" => "submarine.png", "price" => "30"], ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "image" => "game.png", "price" => "100"]
    // ];
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"] . " - Online Store";
        $viewData["subtitle"] = $product["name"] . " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
    public function insert()
    {
        // $post=new Post();
        // $post->title="second person";
        // $post->body="QA analayist";
        // $post->admin_id= "1";
        // $post->save();

        // DB::insert('insert into posts(title, body, admin_id) values (?,?,?)', ['software developer', 'medhin is a software developer', '0']);
        //DB::insert('insert into posts(title, body, admin_id) values (?,?,?)', ['database admin', S'medhin is a software developer', '0']);
        // DB::insert('insert into posts(title, body, admin_id) values (?,?,?)', ['fullstack programmer', 'medhin is a software developer', '0']);
        
    }
    public function select()
    {
        $post = Post::all();
        foreach ($post as $post) {
            echo $post->title;
            echo "<br>";
            echo $post->body;
            echo "<br>";

        }
    }
    public function find($id)
    {
        $post = Post::find($id);
        echo $post->title;
        echo "<br>";
        echo $post->body;
        echo "<br>";


    }

    public function update()
    {
        $post=Post::find('7');
        $post->title="new profetional";
        $post->body="graphic designer";
        $post->admin_id= "1";
        $post->save();

        
    }
   function MassAssignmente()
    {
       post::where("id",7)->update(['title'=>'wd','body'=>'database application developer']);
        
    }
    public function delete()
    {
        $post=Post::find('7');
        $post->delete();

        
    }
    public function destroye($id)
    {
      post::destroy($id);

        
    }
    public function destroymultiple($id)
    {
      post::destroy(2,5);

        
    }
    public function deletequery()
    {
      post::where('id',9)->delete();

        
    }
}

