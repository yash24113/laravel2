<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \App\Http\Models\loginpage;
use Auth;

class logincontroller extends Controller

{

     public function insert(Request $req)
    {
        $logg3=new loginpage;
        $logg3->email=$req->email;
        $logg3->password=$req->password;
        $logg3->save();
        
        
        

        // $data=DB::table('regpage')->where('role',$req->role)->get();
        // if($data==1)
        //  {
        //     return redirect("admin");
        //  }
        //  else
        //  {
        //     return redirect("home1");
        //  }

        if(Auth::user()->role=='1')
        {
             $data=DB::table('users')->get();
             return view('admin');
        }
        else
        {
            return view('home1');
        }
         
   
    }
   // public function index(Request $req)
   //  {
   //      // code...

   //      $data=DB::table('loginpage')->where('email',$req->email)->where('password',$req->password)->get();
   //      if($data->isNotEmpty())
   //      {
   //          $req->session()->put('user',$req->email);
   //          return redirect('admin');

   //      }
   //      else
   //      {
   //          return redirect()->back()->withErrors(['failure'=>'Invalid email or password']);;
   //      }
        
   //  } 
        
        
}
