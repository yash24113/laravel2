<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logg1;
use Illuminate\Support\Facades\DB;
use Session;


class log1 extends Controller
{
     public function insert(Request $req)
    {
        $logg1=new logg1;
        $logg1->email=$req->email;
        $logg1->password=$req->password;
        $logg1->save();
        
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
        // else
        // {
        //     return redirect()->back()->withErrors(['failure'=>'Invalid username or password']);;
        // }
        else
        {
             return redirect('home1');
        }
    
    }
    
}
