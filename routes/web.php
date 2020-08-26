<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


// $resp = Http::get('http://localhost:3000/restaurant');




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
	return view('welcome');
	// return redirect('welcome');
});

Route::view('noaccess','noaccess');

// Route::view('home','home');
// Route::view('profile', 'profile');

// Route::get('users', 'UsersController@index');

// Route::get('formcontroller', 'FormsController@index');
// Route::view('form', 'form');

// Route::view('user', 'user');
// Route::post('usercontroller', 'UsersController@account');

// Route::view('sample' , 'sample');





