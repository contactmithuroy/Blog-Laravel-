<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Setting;
use App\Models\Contact;
use Illuminate\Support\Str;
use Session;


class FrontEndController extends Controller
{
    public function home(){
        $posts = Post::orderBy('created_at','DESC')->take(5)->get();
        // need to 5 post for deferent variable without deferent query
        $firstTwoPost  = $posts->splice(0,2); // o to 2 post-the rest is left post 3
        $middleOnePost  = $posts->splice(0,1);// o to 1 post-the rest is left post 2
        $lastTwoPost  = $posts->splice(0);// o to  rest post all
        // return $lastTwoPost;

        $footerPosts = Post::with('category','user')->inRandomOrder()->limit(4)->get();
        $firstFooterPost  = $footerPosts->splice(0,1); //[1,2,3,4,5]
        $footerMiddleTwoPost  = $footerPosts->splice(0,2);
        $lastFooterPost  = $footerPosts->splice(0,1);

        //if I donot use foreach loop in blade file I need to follow this method
        // $lastFooterPost = lastFooterPost[0];
        $recentPosts = Post::with('category','user')->orderBy('created_at','DESC')->paginate(9);
        return view('website.home',compact(['posts','recentPosts','firstTwoPost','middleOnePost','lastTwoPost','firstFooterPost','footerMiddleTwoPost','lastFooterPost']));
    }

    public function about(){
        $user = User::first();
        return view('website.about',compact('user'));
    }

    public function category($slug){
        $category = Category::where('slug',$slug)->first();

        if($category){
            $posts = Post::where('category_id',$category->id)->paginate(2);
            return view('website.category', compact(['category','posts']));           
        }else{
            return redirect('/');
        }
    }

    public function tag($slug){
        $tag = Tag::where('slug',$slug)->first();
        // return $tag;
        if($tag){
            $posts = $tag->posts()->orderBy('created_at','DESC')->paginate(9);
            return view('website.tag',compact(['tag','posts']));
        }else{
            return redirect('/');
        }

    }

    public function contact(){
        $setting = Setting::first();
        return view('website.contact',compact('setting'));
    }

    public function post($slug){
        $post = Post::with('category','user')->where('slug',$slug)->first();
        $posts = Post::with('category','user')->inRandomOrder()->limit(3)->get();

        $recentPosts = Post::orderBy('category_id','DESC')->inRandomOrder()->limit(4)->get();
        $firstRecentPost  = $recentPosts->splice(0,1); //[1,2,3,4,5]
        $recentMiddleTwoPost  = $recentPosts->splice(0,2);
        $lastRecentPost  = $recentPosts->splice(0,1);

        $categories = Category::all();
        $tags = Tag::all();
        if($post){
            return view('website.post',compact('post','posts','categories','tags','firstRecentPost','recentMiddleTwoPost','lastRecentPost'));
        }else{
            return redirect('/');
        }
        
    }

    public function send_massage(Request $request){
        $this->validate($request,[
            'name'=> 'required|max:100',
            'email'=>'required|email|max:100',
            'subject'=>'max:200',
            'massage'=>'required',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('massage_send','Your massage has been send successfully!');
        return redirect()->back();
    }
}
