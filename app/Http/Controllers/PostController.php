<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;//jumapili

class PostController extends Controller
{

    
   public function __construct()
   {
       $this->middleware('auth',['except'=>['index','show']]);
   }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        if(auth()->user() ==null){
            return view('mitm');
        }
        //return view('posts.index');
        //$posts =Post::all()->paginate(1);
        //$post=Post::orderBy('title','asc')->get();
        //$post=Post::orderBy('title','asc')->take(1)->get();
        //$post=Post::where('title','post 1')->get();
        //$posts =DB::select('SELECT * FROM posts')
        $posts=Post::orderBy('created_at','asc')->paginate(3);
       
        return view('post.index')->with('posts',$posts );
      
    }

     public function manage(){
        if(auth()->user() ==null){
            return view('mitm');
        }
        $posts=Post::all();
       // return view('dashboard.manage_post')->with('posts',$posts);

        if(auth()->user()->role =="PostMaker"){
             return view('dashboard.manage_post')->with('posts',$posts);
        
        }else if(auth()->user()->role =="Admin"){
            return view('dashboard.manage_post')->with('posts',$posts);
        
        }else{
            //echo "HONGERA UMEHACK SYSTEM";
            return view('mitm');
        }
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('posts.create');
         
        if(auth()->user() ==null){
            return view('mitm');
        }


        if(auth()->user()->role =="PostMaker" || auth()->user()->role =="Admin"){
            return view('dashboard.add_post');
       
       }else{
           //echo "HONGERA UMEHACK SYSTEM";
           return view('mitm');
       }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        if(auth()->user() ==null){
            return view('mitm');
        }
        $this->validate($request ,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
          ]    
        );

        if($request->hasFile('cover_image')){
           $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();

           //FILE NAME
           $fileName =pathinfo($fileNameWithExt,PATHINFO_FILENAME);

           //EXTENSION
           $extension =$request->file('cover_image')->getClientOriginalExtension();
           //filenameto store

           $fileNameToStore =$fileName.'_'.time().'.'.$extension;

           $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore="no_image.png";
        }

            $post =new Post;
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->user_id=auth()->user()->id;
            $post->cover_image=$fileNameToStore; 
            $post->save();
        return redirect('dash/posts/addpost')->with('success','POST CREATED');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $recentposts=Post::take(4)->get();
        $post=Post::find($id);
        if($post == null){

            return redirect('/');
        }else {
            return view('post_show')->with('post',$post)->with('recentposts',$recentposts);
        }
       
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(auth()->user() ==null){
            return view('mitm');
        }
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        if(auth()->user() ==null){
            return view('mitm');
        }
        $this->validate($request ,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
          ]    
        );
        if($request->hasFile('cover_image')){
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
 
            //FILE NAME
            $fileName =pathinfo($fileNameWithExt,PATHINFO_FILENAME);
 
            //EXTENSION
            $extension =$request->file('cover_image')->getClientOriginalExtension();
            //filenameto store
 
            $fileNameToStore =$fileName.'_'.time().'.'.$extension;
 
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
         }

            $post =Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            if($request->hasFile('cover_image')){
                $post->cover_image=$fileNameToStore;
            }
            $post->save();
        return redirect('/dash/posts/manage')->with('success','POST UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


     if(auth()->user() ==null){
            return view('mitm');
        }
       $post =Post::find($id);
      
       $post->delete();
       return redirect('/dash/posts/manage')->with('success','POST DELETED');
    }
}
