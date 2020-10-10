<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;


class users extends Controller
{
    //
    function list()
    {
        return view('userlist');
    }

    function create()
    {
        return view('create');
    }

    function loginsubmit(Request $req)
    {
        print_r($req->input());
       
    }
}
