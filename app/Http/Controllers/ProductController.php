<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    function index(){
    	// return "Hello accessors";
    	return Product::all();
    }
}
