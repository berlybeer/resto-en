<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function index(Request $req)
    {
    	// return $req->input();

    	$req->session()->put('data', $req->input());
    	return redirect('loginprofile');
    	// return $req->session()->get('data');
    }
}
