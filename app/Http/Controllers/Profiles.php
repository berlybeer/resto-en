<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profiles extends Controller
{
    //

    function index()
    {
    	//****GET ALL DATA***//
    	// return DB::table('users')->get();

    	//****GET ESPECIFIC DATA**

    	// return DB::table('users')
    	// ->where('name', 'anil')->get();


    	//****COUNT ROWS IN TABLE***

    	// $data = DB::table('users')->count();
    	// print_r($data);

    	//***GET THE FIRST ROW IN A TABLE***

    	// $data = DB::table('users')->first();

    	// print_r($data);

    	//***FIND ESPECIFIC ROW WITH ID****

    	$data = DB::table('users')->find(4);
    	print_r($data);

    	//***DELETE ROW IN DATABESE***//
    	// $data = db::table('users')
    	// ->where('name','sam')
    	// ->delete();

    	//***INSERT ROW IN DATABASE****///

    	// $data = DB::table('users')
    	// ->insert(
    	// 	[
    	// 		'name'=>'bruce',
    	// 		'password'=>'987',
    	// 		'email'=>'bruce@test.com'

    	// 	]
    	// );

    	// print_r($data);


    	//***UPDATE ROW IN DATABASE***//

    	// $data = DB::table('users')
    	// ->where('name', 'bruce')
    	// ->update(
    	// 	[
    	// 		'password'=>'111',
    	// 		'email'=>'bruce11@test.com'

    	// 	]
    	// );

    	// print_r($data);

    }
}
