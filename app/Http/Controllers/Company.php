<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corp;


class Company extends Controller
{
	
	function delete(Request $req)
	{
		//print_r($req->input());
		$corp = Corp::find($req->id);
		echo $corp->delete();
		
		// Corp::destroy([2,3,4,5]);

	}
}
