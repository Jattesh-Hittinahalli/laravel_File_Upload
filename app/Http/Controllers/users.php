<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //

    function index(Request $req)
    {
        echo $req->file('user_img')->store('uploads');
    }
}
