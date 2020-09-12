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

Route::get('/', 'MainController@index');

Route::get('/redirects', 'HomeController@index');

Route::group(['middleware' => ['auth:sanctum', 'admin','verified']], function(){
    //Admin Home Page
    Route::get('pub', 'Admin\FirstPageController@index')->name('pub');

    // All Post/ User
	Route::get('/role-register','Admin\DashboardController@registered');
	Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
	Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');
	Route::get('/all-posts', 'Admin\DashboardController@getposts');
	Route::delete('/post-delete/{id}', 'Admin\DashboardController@getpostsdelete');
    Route::put('role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    
    //Search Admin Users
    Route::get('/searchadmin', 'Admin\DashboardController@searchadmin')->name('searchadmin');

    //Categories
    Route::get('/new-tags','Admin\TagsController@index');
	Route::post('/save-tag','Admin\TagsController@store');
	Route::get('/role-tagedit/{id}', 'Admin\TagsController@tagedit');
	Route::delete('/tag-delete/{id}', 'Admin\TagsController@tagdelete');
	Route::put('role-tag-update/{id}', 'Admin\TagsController@tagupdate');
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

