<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Session;

class RestoController extends Controller
{
    //

    function index()
    {
    	return view('home');
    }

    function list()
    {
    	$data = Restaurant::all();
    	return view('list', ['data' => $data]);
    }

    function add(Request $req)
    {
        // return $req->input();

        $resto = new Restaurant;
        $resto->name= $req->input('name');
        $resto->email= $req->input('email');
        $resto->address= $req->input('address');
        $resto->save();

        $req->session()->flash('status', 'Restaurant entered Successfully');
        return redirect('list');
    }

    function delete($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('status', 'Restaurant has been deleted Successfully');
        return redirect('list');
    }


    function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {

        $resto = Restaurant::find($req->id);
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status', 'Restaurand updated successtully');
        return redirect('list');

    }

    function register(Request $req)
    {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->contact = $req->input('contact');
        $user->save();
        $req->session()->put('user', $req->input('name'));
        return redirect('/');
    }
}

