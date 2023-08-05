<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hawaicontroller extends Controller
{
    public function addData11(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('hawai')->insert($data);
        return redirect('insert11');
    }

    public function dispData11()
    {
        $in = DB::table('hawai')->get();
        return view('edit11', ['in' => $in]);
    }

    public function fetchData11($id)
    {
        $data = DB::table('hawai')->where('id', $id)->get();
        return view('update11', ['data' => $data]);
    }

    public function updateData11(Request $req)
    {
        DB::table('hawai')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit11');
    }

    public function deleteData11($id)
    {
        $res = DB::table('hawai')->where('id', $id)->delete();
        return redirect('edit11');
    }

    public function dispHomeData11()
    {
        $in = DB::table('hawai')->get();
        return view('hawai', ['in' => $in]);
    }
}
