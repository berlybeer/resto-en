<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    //
    function index()
    {
    	$data = db::table('users')->paginate(5);
    	return view('users', ['data' => $data]);
    }
}	
