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

Auth::routes();

// rotte Admin
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts',"PostController");
    
});


