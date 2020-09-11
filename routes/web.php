<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', 'MainController@index');

Route::get('/redirects', 'HomeController@index');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('pub', 'Admin\FirstPageController@index')->name('pub');
});



Route::group(['prefix' => '/category'], function() {
    Route::get('/create', 'CategoryController@create');
    Route::post('/save-category', 'CategoryController@store');
});



Route::get('{category:slug}', 'CategoryController@index')->name('category');

Route::group(['middleware'=>'verified'], function(){
    Route::get('/create/{id}', 'PostController@create')->name('post.create');
    Route::post('/post-store', 'PostController@store');
    Route::get('/edit/{post:slug}', 'PostController@edit')->name('post.edit');
    Route::put('/post/{post:slug}', 'PostController@update')->name('post.update');
});

Route::get('/post/{post:slug}', 'PostController@show')->name('post.show');

Route::post('/comment-store', 'CommentController@store')->name('comments.store');

