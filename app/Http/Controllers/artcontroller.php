<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class artcontroller extends Controller
{
     public function addData13(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('arc')->insert($data);
        return redirect('insert13');
    }

    public function dispData13()
    {
        $in = DB::table('arc')->get();
        return view('edit13', ['in' => $in]);
    }

    public function fetchData13($id)
    {
        $data = DB::table('arc')->where('id', $id)->get();
        return view('update13', ['data' => $data]);
    }

    public function updateData13(Request $req)
    {
        DB::table('arc')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit13');
    }

    public function deleteData13($id)
    {
        $res = DB::table('arc')->where('id', $id)->delete();
        return redirect('edit13');
    }

    public function dispHomeData13()
    {
        $in = DB::table('arc')->get();
        return view('arc', ['in' => $in]);
    }
}
