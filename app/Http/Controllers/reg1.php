<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regg1;

class reg1 extends Controller
{
    public function insert1(Request $req)
    {
        $regg1=new regg1;
        $regg1->name=$req->name;
        $regg1->email=$req->email;
        $regg1->password=$req->password;
        $regg1->save();
        // if($req->email=="yash123@gmail.com" && $req->password=="12345")
        // {
        //      return redirect("home1");
            
        // }
        // else
        // {
        //     return redirect("home");
        // }
        return redirect("home1");
    }
}
