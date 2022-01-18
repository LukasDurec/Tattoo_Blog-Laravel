<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\user\UHomeController;
use App\Http\Controllers\user\UPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User cast
Route::get('/',[UHomeController::class,'index'])->name("index");

Route::get('/blog',[UHomeController::class,'blog'])->name("blog");
Route::get('/post/{post?}',[UPostController::class,'post'])->name("post");
Route::get('/blog/tag/{tag?}',[UHomeController::class,'tag'])->name("tag");

Route::get('/gallery',[UHomeController::class,'gallery'])->name("gallery");

//Admin cast

//POST
Route::resource('admin/posts',PostController::class);
//TAG
Route::resource('admin/tags',TagController::class);
//Gallery
Route::resource('admin/gallery',GalleryController::class);
//HOME
Route::get('admin/home',[HomeController::class,'index'])->name("admin.home");
//USER
Route::resource('admin/users',UserController::class);

Auth::routes();


