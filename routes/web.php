<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\TagController;

use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Front End Route
Route::get('/',[FrontEndController::class,'home'])->name('website.home');
Route::get('/about',[FrontEndController::class,'about'])->name('website.about');
Route::get('/category',[FrontEndController::class,'category'])->name('website.category');
Route::get('/contact',[FrontEndController::class,'contact'])->name('website.contact');
Route::get('/post/{slug}',[FrontEndController::class,'post'])->name('website.post');

// Admin panel Route
Route::group(['prefix'=> 'admin','middleware'=>['auth']],function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard.index');
    });


});
   
Route::resource("admin/category",CategoryController::class);

Route::resource('admin/tag',TagController::class);

Route::resource('admin/post',PostController::class);


// Route::post('/admin/category',[CategoryController::class,'store'])->name('category.store');
// Route::get('/admin/category',[CategoryController::class,'index'])->name('category.index');
// Route::get('/admin/category/create',[CategoryController::class,'create'])->name('category.create');
// Route::put('/admin/category/{category}',[CategoryController::class,'update'])->name('category.update');
// Route::get('/admin/category/{category}',[CategoryController::class,'show'])->name('category.show');
// Route::delete('/admin/category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
// Route::get('/admin/category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');

 











// Route::get('/users', [UserController::class, 'index']);

// Route::get('/category',[CategoryController::class,'index']);