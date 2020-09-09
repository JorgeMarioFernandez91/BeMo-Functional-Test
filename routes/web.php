<?php

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

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/normie', 'Auth\LoginController@showNormieLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/normie', 'Auth\RegisterController@showNormieRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/normie', 'Auth\LoginController@normieLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/normie', 'Auth\RegisterController@createNormie');

Route::view('/home', 'home')->middleware('auth');

Route::get('/contents', 'ContentController@index');
Route::get('/restrictedContents', 'RestrictedContentController@index');

// contents routing ...
Route::resource('contents', 'ContentController');
Route::resource('restrictedContents', 'RestrictedContentController');

// image routing ...
// Route::view('/images', 'contents');
// Route::get('/contents', 'ImageController@index', 'ContentController@index'); // ?????
Route::resource('images', 'ImageController');