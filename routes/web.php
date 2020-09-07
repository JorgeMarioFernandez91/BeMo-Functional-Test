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
// Route::view('/admin', 'admin');

// when contents is used in the url [ ex: localhost:8000/contents] 
// such as when admin gets redirected to /contents, here we tell
// contents to get the index method in ContentController
Route::get('/contents', 'ContentController@index');
Route::get('/restrictedContents', 'RestrictedContentController@index');

// Route::view('/contents', 'contents');
// Route::view('/normie', 'normie');
// Route::view('/normie', 'restrictedContents');

// contents routing ...


Route::resource('contents', 'ContentController');
Route::resource('restrictedContents', 'RestrictedContentController');