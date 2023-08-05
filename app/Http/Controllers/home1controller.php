<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home1controller extends Controller
{
    public function addData3(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            
            
        );

        $store = DB::table('home1crud')->insert($data);
        return redirect('homeinsert1');
    }

    public function dispData3()
    {
        $in = DB::table('home1crud')->get();
        return view('homeedit1', ['in' => $in]);
    }

    public function fetchData3($id)
    {
        $data= DB::table('home1crud')->where('id', $id)->get();
        return view('homeupdate1', ['data' => $data]);
    }

    public function updateData3(Request $req)
    {
        DB::table('home1crud')->where('id', $req->id)
            ->update(['image' => $req->image]);
        return redirect('homeedit1');
    }

    public function deleteData3($id)
    {
        $res = DB::table('home1crud')->where('id', $id)->delete();
        return redirect('homeedit1');
    }

    public function dispHomeData3()
    {
        $in = DB::table('home1crud')->get();
        return view('home1', ['in' => $in]);
    }


    public function flush(Request $req)
    {
        $r=$request->session()->flush();
        return redirect('log');
    }

   
}
