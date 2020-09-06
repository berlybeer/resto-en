<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corp;

class Company extends Controller
{
    //
    function update(Request $req)
    {
    	$corp = Corp::find($req->id);
    	$corp->name = $req->name;
    	$corp->address = $req->address;
    	$corp->save();

		// echo Corp::where('name', $req->name)
  //   	->update(['address'=>'Germany']);
    	
    	// echo Corp::where('id', 4)
    	
    	// ->update(['address'=>'Bangladesh']);
    	// print_r($req->input());	
    }
}
