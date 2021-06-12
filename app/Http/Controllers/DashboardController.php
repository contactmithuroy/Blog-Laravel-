<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $posts = Post::orderBy('created_at','DESC')->take(10)->get();
        $postCount = Post::all()->count();
        $tagCount = Tag::all()->count();
        $userCount = User::all()->count();
        $categoryCount = Category::all()->count();
        return view('admin.dashboard.index',compact('posts','postCount','tagCount','userCount','categoryCount'));
    }

}
