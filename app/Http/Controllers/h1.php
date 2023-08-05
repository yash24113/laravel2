<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hawai1;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class h1 extends Controller
{
     public function insert(Request $req)
    {
        $hawai1=new hawai1;
        $hawai1->package=$req->package;
        $hawai1->price=$req->price;
        
        $hawai1->save();
        return redirect("boat_disp");   /*  success message in m1.php */
    }
     public function disp_data()
    {
         $data=DB::table('hawai1')->get();
          return view('boat_disp',['data'=>$data]);  
                          
     }

     public function show()
    {
        $data=hawai1::all();
        return view('hh',['data'=>$data]);
    }


      public function add_data(Request $req)
    {
        $res=DB::table('hawai1')->insert(['package'=>$req->package,'price'=>$req->price]);
        return redirect('boat_disp');
    }
    //  public function del_data($id)
    // {
    //     $data=DB::table('hawai1')->where('id',$id)->delete();
    //     return redirect('a_hawai');
    // }

    public function  del_data($id)
    {
        $data=hawai1::find($id);
        $data->delete();
        return redirect('a_hawai');
    }
    public function fetch_data($id)
    {
        $data=DB::table('hawai1')->where('id',$id)->get();
        return view('editdata2',['data'=>$data]);
    }
    public function update_data(Request $req)
    {
        DB::table('hawai1')->where('id',$req->id)->update(['email'=>$req->email,'password'=>$req->password]);
        return redirect('fadmin');
    }
}
