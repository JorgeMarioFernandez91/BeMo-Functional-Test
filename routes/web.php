<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


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
Route::view('/admin', 'admin');
Route::view('/normie', 'normie');

// Route::group(['middleware' => 'auth:admin'], function () {
//     Route::view('/admin', 'admin');
// });

// Route::group(['middleware' => 'auth:normie'], function () {
//     Route::view('/normie', 'normie');
// });
