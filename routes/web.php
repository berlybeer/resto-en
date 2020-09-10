<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

$info = "hi, let's learn laravel 7";
// $info = Str::replaceFirst('hi','hello', $info);

// $info = Str::ucfirst($info);
// $info = Str::camel($info);

$info = Str::of($info)
	->replaceFirst('hi', 'hello', $info)
	->ucfirst($info)
	->camel($info);


echo "<h1>" . $info . "</h1>";

Route::get('/', function () {
    return view('welcome');
});
