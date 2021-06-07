<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
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
        return view('website.about');
    }

    public function category(){
        return view('website.category');
    }

    public function contact(){
        return view('website.contact');
    }

    public function post($slug){
        $post = Post::with('category','user')->where('slug',$slug)->first();
        if($post){
            return view('website.post',compact('post'));
        }else{
            return redirect('/');
        }
        
    }
}
