<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class logg3 extends Controller

{

     public function insert(Request $req)
    {
        $logg3=new log3;
        $logg3->email=$req->email;
        $logg3->password=$req->password;
        $logg3->save();
        
        return redirect("home1");
        }
   public function index(Request $req)
    {
        // code...

        $data=DB::table('log3')->where('email',$req->email)->where('password',$req->password)->get();
        if($data->isNotEmpty())
        {
            $req->session()->put('user',$req->email);
            return redirect('admin');

        }
        else
        {
            return redirect()->back()->withErrors(['failure'=>'Invalid email or password']);;
        }
        
    } 
}
