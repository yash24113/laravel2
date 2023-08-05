<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class snowcontroller extends Controller
{
     public function addData15(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            'package'=>$req->package,
            'price'=>$req->price,
            
        );

        $store = DB::table('snow')->insert($data);
        return redirect('insert15');
    }

    public function dispData15()
    {
        $in = DB::table('snow')->get();
        return view('edit15', ['in' => $in]);
    }

    public function fetchData15($id)
    {
        $data = DB::table('snow')->where('id', $id)->get();
        return view('update15', ['data' => $data]);
    }

    public function updateData15(Request $req)
    {
        DB::table('snow')->where('id', $req->id)
            ->update(['image' => $req->image, 'package' => $req->package, 'price' => $req->price]);
        return redirect('edit15');
    }

    public function deleteData15($id)
    {
        $res = DB::table('snow')->where('id', $id)->delete();
        return redirect('edit15');
    }

    public function dispHomeData15()
    {
        $in = DB::table('snow')->get();
        return view('snow', ['in' => $in]);
    }
    
}
