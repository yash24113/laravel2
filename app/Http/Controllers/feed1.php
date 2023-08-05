<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\feed12;

class feed1 extends Controller
{
    public function add_data1(Request $req)
    {
        $message="Invalid Mobile Number";
        $req->validate([
             'num'=>'required|min:10|max:10'
         ]);

        $res=DB::table('feed12')->insert(['view'=>$req->view,'comments'=>$req->comments,'name'=>$req->name,'email'=>$req->email,'num'=>$req->num]);
        return redirect('feedback');
    }
     public function disp_data1()
    {
         $data=DB::table('feed12')->get();
          return view('feed_disp',['data'=>$data]);  
                          
     }
     
    
}
