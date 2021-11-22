<?php

use App\Http\Controllers\PageController;
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

// ROTTE PUBLIC

Route::get('/','PageController@index');
Route::get ('/blog' , "PostController@index")->name("posts.index");
Route::get('/show/{slug}' , "PostController@show")->name("single.post");
Route::get('/api-posts', 'PageController@apiPosts')->name("posts.api");

Auth::routes();

// rotte Admin
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts',"PostController");
    Route::resource('categories',"CategoryController");
    Route::resource('tags',"TagController");
    
});


