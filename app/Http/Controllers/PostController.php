<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $posts = Post::orderBy('created_at','DESC')->paginate(20);
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create',compact(['categories'],['tags']));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|unique:posts,title',
            'image'=>'required|image',
            'description'=>'required',
            'category_id'=>'required'
        ]);
       
        $post = Post::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title,'-'),
            'image'=>'image.jpg',
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'user_id'=>auth()->user()->id,
            'published_at'=>Carbon::now(),
        ]);
        // attach
        $post->tags()->attach($request->tags);

        if($request->has('image')){
            $image = $request->image;
            $imageNewName = Time().".".$image->getClientOriginalExtension();
            $image->move('storage/post/',$imageNewName);
            $post->image = '/storage/post/'.$imageNewName;
            $post->save();
        }

        Session::flash('success','Post has been create successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit',compact(['post','categories','tags']));
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title'=>"required|unique:posts,title, $post->id",
            'description'=>'required',
            'category_id'=>'required'
        ]);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title,'-');
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $post->tags()->sync($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $imageNewName = Time().".".$image->getClientOriginalExtension();
            $image->move('storage/post/',$imageNewName);
            $post->image = '/storage/post/'.$imageNewName;
        }

        $post->save();
        Session::flash('success','Post has been update successfully');
        return redirect()->back();

          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post){
            if(file_exists(public_path($post->image))){ //if have this type of path has exiting
                unlink(public_path($post->image)); // have exiting then delete this file
            }
            $post->delete();
            Session::flash('success','Post has been delete');
        }
        return redirect()->back();
    }
}
