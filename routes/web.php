<?php

use Illuminate\Support\Facades\Auth;
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
//user routes
Route::get('/', 'user\HomeController@index');
Route::get('/music', 'user\MusicController@index');
Route::get('/searchmusic', 'user\MusicController@search');
Route::get('/download/music/{id}', 'user\MusicController@download');
Route::get('/download/video/{id}', 'user\VideoController@download');
Route::get('/about', 'user\AboutController@index');
Route::get('/musicdownload{id}', 'user\MusicController@show');
Route::get('/artistmusic{id}', 'user\MusicController@artist');
Route::post('/music/comment', 'user\CommentController@comment');
Route::get('/blog', 'user\BlogController@index');
Route::get('/contact', 'user\ContactController@index');
Route::get('/videos', 'user\VideoController@index');
Route::get('/searchvideo', 'user\VideoController@search');
Route::get('/videoshow{id}', 'user\VideoController@show');

//admin routes
Route::get('/adminpanel', 'admin\HomeController@index');
//Music
Route::get('/adminmusic', 'admin\MusicController@index');
Route::get('/adminmusiccreate', 'admin\MusicController@create');
Route::post('/adminmusicstore', 'admin\MusicController@store');
Route::get('/adminmusicshow{id}', 'admin\MusicController@show');
Route::get('/adminmusicedit{id}', 'admin\MusicController@edit');
Route::post('/adminmusic{id}', 'admin\MusicController@update');
Route::get('/adminmusicdownload{id}', 'admin\MusicController@download');
Route::delete('/adminmusicdelete{id}', 'admin\MusicController@destroy');
Route::post('/admin/search/music', 'admin\MusicController@search')->name('adminmusicsearch');
//Beats
Route::get('/adminbeat', 'admin\BeatController@index');
Route::get('/adminbeatcreate', 'admin\BeatController@create');
Route::post('/adminbeatstore', 'admin\BeatController@store');
Route::get('/adminbeatshow{id}', 'admin\BeatController@show');
Route::get('/adminbeatedit{id}', 'admin\BeatController@edit');
Route::post('/adminbeat{id}', 'admin\BeatController@update');
Route::get('/adminbeatdownload{id}', 'admin\BeatController@download');
Route::delete('/adminbeatdelete{id}', 'admin\BeatController@destroy');
Route::post('/admin/search/beat', 'admin\BeatController@search')->name('adminbeatsearch');
//Artist
Route::get('/adminartist', 'admin\ArtistController@index');
Route::get('/adminartistcreate', 'admin\ArtistController@create');
Route::post('/adminartiststore', 'admin\ArtistController@store');
Route::get('/adminartistshow{id}', 'admin\ArtistController@show');
Route::get('/adminartistedit{id}', 'admin\ArtistController@edit');
Route::post('/adminartist{id}', 'admin\ArtistController@update');
Route::delete('/adminartistdelete{id}', 'admin\ArtistController@destroy');
Route::post('/admin/search/artist', 'admin\ArtistController@search')->name('adminartistsearch');
//Video
Route::get('/adminvideo', 'admin\VideoController@index');
Route::get('/adminvideocreate', 'admin\VideoController@create');
Route::post('/adminvideostore', 'admin\VideoController@store');
Route::get('/adminvideoshow{id}', 'admin\VideoController@show');
Route::get('/adminvideoedit{id}', 'admin\VideoController@edit');
Route::post('/adminvideo{id}', 'admin\VideoController@update');
Route::delete('/adminvideodelete{id}', 'admin\VideoController@destroy');
Route::post('/admin/search/video', 'admin\VideoController@search')->name('adminvideosearch');
//gallery
Route::get('/admingallery', 'admin\GalleryController@index');
Route::get('/admingallerycreate', 'admin\GalleryController@create');
Route::post('/admingallerystore', 'admin\GalleryController@store');
Route::delete('/admingallerydelete{id}', 'admin\GalleryController@destroy');
//Biography
Route::get('/adminbiography', 'admin\BiographyController@index');
Route::get('/adminbiographycreate', 'admin\BiographyController@create');
Route::post('/adminbiographystore', 'admin\BiographyController@store');
Route::get('/adminbiographyedit{id}', 'admin\BiographyController@edit');
Route::post('/adminbiography{id}', 'admin\BiographyController@update');
Route::delete('/adminbiographydelete{id}', 'admin\BiographyController@destroy');
Route::post('/admin/search/biography', 'admin\BiographyController@search')->name('adminbiosearch');
//Advance
Route::get('/adminadvance', 'admin\AdvanceController@index');
Route::get('/adminadvancecreate', 'admin\AdvanceController@create');
Route::post('/adminadvancestore', 'admin\AdvanceController@store');
Route::get('/adminadvancedit{id}', 'admin\AdvanceController@edit');
Route::post('/adminadvance{id}', 'admin\AdvanceController@update');
Route::delete('/adminadvancedelete{id}', 'admin\AdvanceController@destroy');


Auth::routes();

Route::get('/adminloginform', 'Auth\AdminLoginController@showloginform')->name('adminlogin');
Route::post('/adminlogin', 'Auth\AdminLoginController@login')->name('adminloginsubmit');
Route::get('/adminlogout', 'Auth\AdminLoginController@Logout')->name('adminlogout');
Route::get('/adminaddanadministrateatkelcommusic', 'HomeController@index')->name('adminadd');
Route::post('/adminadd', 'HomeController@store')->name('adminstore');
