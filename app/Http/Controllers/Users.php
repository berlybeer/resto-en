<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //

    function index()
    {
    	return view('nav.sample', ['name' => 'anil sidhu' ]);
    }
    function show($id)
    {
    	echo  "Hello from controller: " . $id;
    }
}
