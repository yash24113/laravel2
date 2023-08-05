<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hawai1;

//use Illuminate\Support\Facades\DB;

class hawai extends Controller
{
    public function insert(Request $req)
    {
        $hawai1=new hawai1;
        $hawai1->package=$req->package;
        $hawai1->price=$req->price;
        
        $hawai1->save();
        return redirect("hawai");   /*  success message in m1.php */
    }
     public function disp_data()
    {
         $data=DB::table('hawai1')->get();
          return view('hawai',['data'=>$data]);  
                          
     }
  
}
