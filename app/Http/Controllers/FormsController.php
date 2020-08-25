<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    function index(Request $req)
    {
    	// return $req->input();

    	// echo $req->path();
    	// echo $req->url();
    	echo $req->method();

    	// echo $req->input('address');

    	// return $req->query();


    }
}
