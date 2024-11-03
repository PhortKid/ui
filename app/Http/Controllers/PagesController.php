<?php

namespace App\Http\Controllers;
use App\Models\UserModal;
use Illuminate\Http\Request;
use App\Models\Post;
class PagesController extends Controller
{
   public  function index(){
       //return view('posts.index');
        //$posts =Post::all()->paginate(1);
        //$post=Post::orderBy('title','asc')->get();
        //$post=Post::orderBy('title','asc')->take(1)->get();
        //$post=Post::where('title','post 1')->get();
        //$posts =DB::select('SELECT * FROM posts')
        $posts=Post::orderBy('title','asc')->paginate(3);
        $oldposts=Post::take(3)->orderBy('created_at','asc')->get();
        //$post_owner= $posts->user_id;

       // $username=UserModal::where('user_id',$post_owner)->get();
       // return $posts;

       return view('index')->with('posts',$posts )->with('oldposts', $oldposts);
    }


    public function post_show(string $id){

        $post=Post::find($id);
       
        
        return view('post_show')->with('post',$post);
    }
  
}
