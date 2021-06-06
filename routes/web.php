<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/',function(){
//     return view('layouts.website');
// });

Route::get('/',function(){
    return view('website.home');
})->name('website.home');

Route::get('/contact',function(){
    return view('website.contact');
});

Route::get('/about',function(){
    return view('website.about');
});

// Route::get('/category',function(){
//     return view('website.category');
// });

Route::get('/post',function(){
    return view('website.post');
});


// Admin panel route
Route::group(['prefix'=> 'admin','middleware'=>['auth']],function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard.index');
    });

});

// Route::post('/admin/category',[CategoryController::class,'store'])->name('category.store');
// Route::get('/admin/category',[CategoryController::class,'index'])->name('category.index');
// Route::get('/admin/category/create',[CategoryController::class,'create'])->name('category.create');
// Route::put('/admin/category/{category}',[CategoryController::class,'update'])->name('category.update');
// Route::get('/admin/category/{category}',[CategoryController::class,'show'])->name('category.show');
// Route::delete('/admin/category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
// Route::get('/admin/category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');

Route::resource("admin/category",CategoryController::class);

Route::resource('admin/tag',TagController::class);













// Route::get('/users', [UserController::class, 'index']);

// Route::get('/category',[CategoryController::class,'index']);