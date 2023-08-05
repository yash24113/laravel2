<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pro1;
class project1 extends Controller
{
    public function insert(Request $req)
    {
        $pro1=new pro1;
        $pro1->email=$req->email;
        $pro1->password=$req->password;
        $pro1->save();
        return redirect("home");   /*  success message in m1.php */
    }
}
