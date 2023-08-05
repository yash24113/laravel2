<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class campcontroller extends Controller
{
    public function addData14(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('camp1')->insert($data);
        return redirect('insert14');
    }

    public function dispData14()
    {
        $in = DB::table('camp1')->get();
        return view('edit14', ['in' => $in]);
    }

    public function fetchData14($id)
    {
        $data = DB::table('camp1')->where('id', $id)->get();
        return view('update14', ['data' => $data]);
    }

    public function updateData14(Request $req)
    {
        DB::table('camp1')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit14');
    }

    public function deleteData14($id)
    {
        $res = DB::table('camp1')->where('id', $id)->delete();
        return redirect('edit14');
    }

    public function dispHomeData14()
    {
        $in = DB::table('camp1')->get();
        return view('camp', ['in' => $in]);
    }
}
