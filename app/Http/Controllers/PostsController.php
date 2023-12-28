<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\PostImage;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;
class PostsController extends Controller
{
    public function insertPostWithPostImage()
    {
        //
        $post = new Post();
        $post->title = "second person fgjg";
        $post->body = "QA analayist";
        $post->admin_id= "1";
        $postImage = new PostImage(['name' => 'newPerson Image', 'url' => 'images/postImages/232.png']);
        $post->save();
        $post->postImage()->save($postImage);
        $post->save();

        return $post;
    }
    function getPostsImage($postId)
    {
        return Post::find($postId)->postImage;
    }
    function getPostsFromPostImage($postImageId)
    {
        return PostImage::find($postImageId)->post;
    }
    public function insertCommentsForPost(){
        $post=Post::with('comments','postImage')->find(1);
        $post->comments()->saveMany([
        new Comment(
            ['commenter'=>'john deo','comment_body'=>'Lorem Ipsum is simply dummy text of the printing and typesetting']),

        new comment(
                ['commenter'=>'john deo','comment_body'=>'Lorem Ipsum has been the industrys standard dummy']),

        ]);
        $post->save();
        $post->refresh();
        return $post;


    }
    public function posts_catagories(){

        $catagory1 =new Category(['name'=> 'catagory one']);
        $catagory1->save();
        $catagory2 =new Category(['name'=> 'catagory two']);
        $catagory2->save();
        $catagory3 =new Category(['name'=> 'catagory three']);
        $catagory3->save();

        $post1 =new Post(['title'=> 'post one title','body'=>'post one body']);
        $post1->save();
        $post2 =new Post(['title'=> 'post one title','body'=>'post one body']);
        $post2->save();
        $post3 =new Post(['title'=> 'post one title','body'=>'post one body']);
        $post3->save();

        $post1->catagories()->attach([$catagory1->id, $catagory2->id]);
        $post1->catagories()->attach([$catagory2->id, $catagory3->id]);
        $post1->catagories()->attach([$catagory3->id, $catagory1->id]);
        return response()->json(['post1'=>$post1, 'post2'=> $post2, 'post3'=> $post3]);
    }
    public function with_catagories($id){
        $post= Post::with('catagories')->find($id);
        return $post;
    }
    public function with_posts($id){
        $category= Category::with('posts')->find($id);
        return $category;
    }
}
