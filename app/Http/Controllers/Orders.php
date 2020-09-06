<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class Orders extends Controller
{
    //
    
    function index()
    {
    	// return Product::get()->all();
    	// return Product::where('name','samsung')->get();
    	// return Product::find(2);
    	// return Product::find([3,5]);

    	// return Product::first();
    	// return Product::max('price');
    	// return Product::min('price');

    	// return Product::avg('price');

    	// return Product::sum('price');

    	return Product::count('price');
    }
}
