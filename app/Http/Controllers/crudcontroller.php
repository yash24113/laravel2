<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudcontroller extends Controller
{
    public function addData(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('crud')->insert($data);
        return redirect('insert');
    }

    public function dispData()
    {
        $in = DB::table('crud')->get();
        return view('edit', ['in' => $in]);
    }

    public function fetchData($id)
    {
        $data = DB::table('crud')->where('id', $id)->get();
        return view('update', ['data' => $data]);
    }

    public function updateData(Request $req)
    {
        DB::table('crud')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit');
    }

    public function deleteData($id)
    {
        $res = DB::table('crud')->where('id', $id)->delete();
        return redirect('edit');
    }

    public function dispHomeData()
    {
        $in = DB::table('crud')->get();
        return view('boating', ['in' => $in]);
    }
}
