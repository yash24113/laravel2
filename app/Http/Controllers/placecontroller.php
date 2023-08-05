<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class placecontroller extends Controller
{
     public function addData16(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('place')->insert($data);
        return redirect('insert16');
    }

    public function dispData16()
    {
        $in = DB::table('place')->get();
        return view('edit16', ['in' => $in]);
    }

    public function fetchData16($id)
    {
        $data = DB::table('place')->where('id', $id)->get();
        return view('update16', ['data' => $data]);
    }

    public function updateData16(Request $req)
    {
        DB::table('place')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit16');
    }

    public function deleteData16($id)
    {
        $res = DB::table('place')->where('id', $id)->delete();
        return redirect('edit16');
    }

    public function dispHomeData16()
    {
        $in = DB::table('place')->get();
        return view('place', ['in' => $in]);
    }
}
