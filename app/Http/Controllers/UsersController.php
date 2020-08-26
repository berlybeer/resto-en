<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    function index()
    {
    	$d = ['name' => 'samm', 'email' => 'anil@test.com', 'address'=>'noida'];
    	return view('users', ['data' => $d]);
    }

    function account(Request $req)
    {
    	$req->validate([
    		'address'=>'required | min:3 | max:7',
    		'email'=>'required | email'
    	]);
    	return $req->input();
    }
}
