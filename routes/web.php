<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class,'show']);

// Route::get("categories/{category:slug}", function(Category $category) {
//     return view("posts", [
//         "posts"=>$category->posts,
//         'currentCategory'=>$category,
//         'categories'=>Category::all()
//     ]);
// })->name('category');

// Route::get("authors/{author:username}", function(User $author) {
    
//     return view("posts.index", [
//         "posts"=>$author->posts,
      
//     ]);
// });

Route::get('register',[RegisterController::class,'create'])->middleware('guest');

Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionController::class,'create'])->middleware('guest');
Route::post('sessions',[SessionController::class,'store'])->middleware('guest');

Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');
Route::post('posts/{post:slug}/comments',[PostCommentController::class,'store']);