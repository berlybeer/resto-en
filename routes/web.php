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
	return view('welcome');
	// return redirect('welcome');
});

Route::get('/profile/{lang}', function ($lang) {
	App::setLocale($lang);
	return view('profile');
	// return redirect('welcome');
});

// Route::view('profile', 'profile');






