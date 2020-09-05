<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Profile extends Controller
{
    //
    function index()
    {
    	return Product::all();
    }
}
