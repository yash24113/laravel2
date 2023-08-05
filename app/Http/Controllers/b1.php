<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\boat1;
use RealRashid\SweetAlert\Facades\Alert;


class b1 extends Controller
{
     public function insert(Request $req)
    {
        $boat1=new boat1;
        $boat1->package=$req->package;
        $boat1->price=$req->price;
        
        $boat1->save();
        return redirect("boat_disp");   /*  success message in m1.php */
    }

     public function add_data(Request $req)
    {
        $res=DB::table('boat1')->insert(['package'=>$req->package,'price'=>$req->price]);
        return redirect('boat_disp');
    }

    //  public function disp_data()
    // {
    //      $data=DB::table('boat1')->get();
    //       return view('boat_disp',['data'=>$data]);  
                          
    //  }
       public function disp_data()
    {
         $data=DB::table('boat1')->get();
          return view('boating',['data'=>$data]);  
                          
     }


  
      public function del_data($id)
    {
        $res=DB::table('boat1')->where('id',$id)->delete();
        return redirect('boat_disp');
    }

    public function fetch_data($id)
    {
        $data=DB::table('boat1')->where('id',$id)->get();
        return view('editdata',['data'=>$data]);
    }
    public function update_data(Request $req)
    {
        DB::table('boat1')->where('id',$req->id)->update(['package'=>$req->package,'price'=>$req->price]);
        return redirect('boat_disp');
    }

    
}
