<?php

namespace App\Http\Controllers;
use \App\Models\mo1;
use Illuminate\Http\Request;

class c1 extends Controller
{
//     public function getData(Request $res)
//     {
//     $res->validate(
//            [
//            'text'=>'required|max:5',
            
//        ]);
//   }
   public function insert(Request $req)
   {
       $mo1=new mo1;
       $mo1->p_image=$req->p_image;
      
       $mo1->save();
       return redirect("a_about");   /*  success message in m1.php */
   }
//    public function show()
//    {
//        $data=mo1::all();
//        return view('listData',['data'=>$data]);
//    }
}
