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
//tests

Route::get('music/download', 'user\MusicController@downloadm')->name('music.download');
//user routes
Route::get('/', 'user\HomeController@index');
Route::get('/music', 'user\MusicController@index');
Route::post('/search/music', 'user\MusicController@search')->name('musicsearch');
Route::get('/download/music/{id}', 'user\MusicController@download');
Route::get('/download/video/{id}', 'user\VideoController@download');
Route::get('/about', 'user\AboutController@index');
Route::get('/music/download/{id}', 'user\MusicController@show');
Route::post('/music/comment', 'user\CommentController@comment');
Route::get('/blog', 'user\BlogController@index');
Route::get('/contact', 'user\ContactController@index');
Route::get('/videos', 'user\VideoController@index');
Route::post('/search/video', 'user\VideoController@search')->name('videosearch');
Route::get('/video/show/{id}', 'user\VideoController@show');

//admin routes
Route::get('/admin/panel', 'admin\HomeController@index');
Route::resource('/admin/music', 'admin\MusicController');
Route::get('/admin/download/music/{id}', 'admin\MusicController@download');
Route::post('/admin/search/music', 'admin\MusicController@search')->name('adminmusicsearch');
Route::resource('/admin/artist', 'admin\ArtistController');
Route::post('/admin/search/artist', 'admin\ArtistController@search')->name('adminartistsearch');
Route::resource('/admin/video', 'admin\VideoController');
Route::post('/admin/search/video', 'admin\VideoController@search')->name('adminvideosearch');
Route::resource('/admin/gallery', 'admin\GalleryController');
Route::resource('/admin/biography', 'admin\BiographyController');
Route::post('/admin/search/biography', 'admin\BiographyController@search')->name('adminbiosearch');
Route::resource('/admin/advance', 'admin\AdvanceController');
