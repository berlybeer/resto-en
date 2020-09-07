<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    //

    function index()
    {
    	return User::find(2)->myCompany;
    }
}
