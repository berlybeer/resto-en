<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Profile extends Controller
{
    //

    function index(){


    	$data = db::table('users')->get();
    	echo "<pre>";
    	print_r($data);
    	echo "<br/>";

    	$data2 = db::table('users')->join('products', 'users.id', 'products.user_id')
    	->get();
    	echo "<pre>";
    	print_r($data2);
    	echo "<br/>";

    	$data3 = db::table('users')
    			->select('users.name', 'products.category')
    			->join('products', 'users.id', 'products.user_id')
    			->get();
    	echo "<pre>";
    	print_r($data3);
    	echo "<br/>";


    	$data4 = db::table('users')
    			->select('users.name', 'products.category')
    			->join('products', 'users.id', 'products.user_id')
    			->where('users.name', 'bruce')
    			->get();
    	echo "<pre>";
    	print_r($data4);
    	echo "<br/>";


    }
}
