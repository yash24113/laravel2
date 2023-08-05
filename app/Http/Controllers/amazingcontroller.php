<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class amazingcontroller extends Controller
{
    public function addData12(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('amazing1')->insert($data);
        return redirect('insert12');
    }

    public function dispData12()
    {
        $in = DB::table('amazing1')->get();
        return view('edit12', ['in' => $in]);
    }

    public function fetchData12($id)
    {
        $data = DB::table('amazing1')->where('id', $id)->get();
        return view('update12', ['data' => $data]);
    }

    public function updateData12(Request $req)
    {
        DB::table('amazing1')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit12');
    }

    public function deleteData12($id)
    {
        $res = DB::table('amazing1')->where('id', $id)->delete();
        return redirect('edit12');
    }

    public function dispHomeData12()
    {
        $in = DB::table('amazing1')->get();
        return view('amazing', ['in' => $in]);
    }
}
