<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//BLOG
Route::match(['get','POST'],'add_blog', 'BlogController@add_blog')->name('add_blog');
Route:: any('view_blog', 'BlogController@view_blog')->name('view_blog');
Route::match(['get','POST'],'edit_blog/{id}', 'BlogController@edit_blog');
Route::any('delete_blog/{id}','BlogController@delete_blog');
Route::POST('/admin/update-product-status','BlogController@updateblog_status');

//BLOGKEYWORD
Route::match(['get','POST'],'add_blogkeyword', 'BlogkeywordController@add_blogkeyword')->name('         add_blogkeyword');
Route:: any('view_blogkeyword', 'BlogkeywordController@view_blogkeyword')->name('  
	         view_blogkeyword');
Route::POST('/Keyword_Status','BlogkeywordController@Keyword_Status');
Route::match(['get','POST'],'edit_blogkeyword/{id}', 'BlogkeywordController@edit_blogkeyword');
Route::any('delete_blogkeyword/{id}','BlogkeywordController@delete_blogkeyword');


//BLOGSEO ROUTES
Route::match(['get','post'],'add_blogseo','BlogseoController@add_blogseo');
Route:: any('view_blogseo', 'BlogseoController@view_blogseo')->name('view_blogseo');
Route::match(['get','post'],'edit_blogseo/{id}','BlogseoController@edit_blogseo');
Route::any('delete_blogseo/{id}','BlogseoController@delete_blogseo');
Route::POST('/Blogseo_Index','BlogseoController@Blogseo_Index');