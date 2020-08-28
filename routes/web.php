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


Route::view('login','login');
Route::post('login', 'Login@index');


// Route::get('loginprofile/', function(){
		
// 		return view('loginprofile');
// });

Route::get('/logout', function(){
		session()->forget('data');
		return redirect('login');
});


Route::group(['middleware' => ['customAuth']], function(){
	Route::view('loginprofile','loginprofile');

});


Route::view('profile', 'profile')->middleware('customRouteAuth');
// Route::view('noaccess','noaccess');

// Route::group(['middleware' => ['customAuth']], function(){
// 	Route::get('/', function () {
// 		return view('welcome');
// 	// return redirect('welcome');
// 	});

// 	Route::view('profile', 'profile');
// });

Route::get('profiles', 'Profiles@list');
Route::view('noaccess', 'noaccess');

Route::view('books', 'books');
Route::post('books', 'Books@index');

Route::view('task','task');

Route::post('task','Task@index');

// Route::view('home','home');
// Route::view('profile', 'profile');

// Route::get('users', 'UsersController@index');

// Route::get('formcontroller', 'FormsController@index');
// Route::view('form', 'form');

// Route::view('user', 'user');
// Route::post('usercontroller', 'UsersController@account');

// Route::view('sample' , 'sample');





