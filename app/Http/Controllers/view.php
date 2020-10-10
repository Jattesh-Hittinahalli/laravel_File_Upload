<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dbuser;

class view extends Controller
{
    //   
     function list()
    {
        $user=dbuser::all();
        return view('userlist',['user'=>$user]);
    }

    public function create()
    {
        return view('create');
    }

   public function loginsubmit(Request $req)
    {
      // print_r($req->input());
     return dbuser::select('name')->where(
           [
                ['email','=',$req->Email],
                ['password','=',$req->Password]
            
            ]
            
        ) ->get();
        

       

       
    }

    
    public function createsubmit(Request $req){
       //print_r($req->input());
        $dbuser=new dbuser;
        $dbuser->name=$req->Name;
        $dbuser->email=$req->Email;
        $dbuser->password=$req->Password;
        $result=$dbuser->save();
        if($result)
        {
            return redirect('/list');
        }

    }


}
