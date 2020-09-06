<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class Companies extends Controller
{
    //

    function save(Request $req)
    {
    	// print_r($req->input());
    	$form = new Form;
    	$form->name = $req->name;
    	$form->address = $req->address;
    	echo $form->save();

    }
}
