<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Http\Controllers\Auth;

class UserController extends Controller
{   
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index(){
        $users = User::latest()->paginate(20);
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        return view('admin.user.create');

    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'slug' =>Str::slug($request->name,'-'),
            'email'=> $request->email,
            'password' =>Hash::make($request->password),
            'image'=>'avatar.jpg',
            'description'=>$request->description,
        ]);

        if($request->has('image')){
            $image = $request->image;
            $imageNewName = Time().".".$image->getClientOriginalExtension();
            $image->move('storage/users/',$imageNewName);
            $user->image = '/storage/users/'.$imageNewName;
            $user->save();
        }
        Session::flash('success','User created successfully');
        return redirect()->back();
    }


    public function edit(User $user){
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request, User $user){
        
        $this->validate($request, [
            'name'=> 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'required|min:8'
        ]);
        
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->slug = Str::slug($request->name,'-');
        $user->description = $request->description;

        if($request->hasFile('image')){
            $image = $request->image;
            $imageNewName = Time().".".$image->getClientOriginalExtension();
            $image->move('storage/users/',$imageNewName);
            $user->image = '/storage/users/'.$imageNewName;
        }

        $user->save();

        Session::flash('success','User created successfully');
        return redirect()->back();
        
      
        Session::flash('success','User update successfully');
    }


    public function destroy(User $user){
        if($user){
            if(file_exists(public_path($user->image))){
                unlink(public_path($user->image));
            }
            $user->delete();
            Session::flash('success','User data has been delete successfully!');
        }
        return redirect()->back();

    }

    public function profile(){
        $user = auth()->user();
        return view('admin.user.show',compact('user'));
    }

    public function profileUpdate(Request $request){
        $user = auth()->user();

        $this->validate($request, [
            'name'=> 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'required|min:8'
        ]);
        
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->slug = Str::slug($request->name,'-');
        $user->password = Hash::make($request->password);
        $user->description = $request->description;
        
        // if($request->has('password')){
        //     $user->password = Hash::make($request->password);
        // }
        
        if($request->hasFile('image')){
            $image = $request->image;
            $imageNewName = Time().".".$image->getClientOriginalExtension();
            $image->move('storage/users/',$imageNewName);
            $user->image = '/storage/users/'.$imageNewName;
        }

        $user->save();

        Session::flash('success','User update successfully');
        return redirect()->back();

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

}
