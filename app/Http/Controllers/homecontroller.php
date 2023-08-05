<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function addData2(Request $req)
    {
        $data = array(
            'image'=>$req->image,
            
            
        );

        $store = DB::table('homecrud')->insert($data);
        return redirect('homeinsert');
    }

    public function dispData2()
    {
        $in = DB::table('homecrud')->get();
        return view('homeedit', ['in' => $in]);
    }

    public function fetchData2($id)
    {
        $data = DB::table('homecrud')->where('id', $id)->get();
        return view('homeupdate', ['data' => $data]);
    }

    public function updateData2(Request $req)
    {
        DB::table('homecrud')->where('id', $req->id)
            ->update(['image' => $req->image]);
        return redirect('homeedit');
    }

    public function deleteData2($id)
    {
        $res = DB::table('homecrud')->where('id', $id)->delete();
        return redirect('homeedit');
    }

    public function dispHomeData2()
    {
        $in = DB::table('homecrud')->get();
        return view('home1', ['in' => $in]);
      //  return $in;
    }
}
