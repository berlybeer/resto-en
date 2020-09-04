<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    function index()
    {
    	//code will be here
    	$data = db::table('users')->max('age');
    	echo "The maximum age is: ";
    	print_r($data);

    	echo "<br/>";
    	$data2 = DB::table('users')->min('age');
    	echo "The minimum age is: ";
    	print_r($data2);

    	echo "<br/>";
    	$data3 = DB::table('users')->sum('age');

		echo "The total summ of the ages is: ";
    	print_r($data3);

    	echo "<br/>";

    	$data4 = db::table('users')->avg('age');
    	echo "The average is: ";
    	print_r($data4);

    	echo "<br/>";

    	$data5 = db::table('users')->count('age');
    	echo "There are " . $data5 . " ages";


    }
}
