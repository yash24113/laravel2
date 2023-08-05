<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\demo_log1_reg1;
use RealRashid\SweetAlert\Facades\Alert;


class demo_login_regi extends Controller
{
   // public function login(Request $req)
   //  {
   //      $data=DB::table('demo_log1_reg1')->where('name',$req->name)->where('password',$req->password)->get();
   //   $role=$data[0]->role;

   //      if($role=='user')
   //      {
   //          return redirect('home');
   //      }
   //      else
   //      {
   //           return redirect('fadmin');
   //      }
   //  }


   //   public function register(Request $req)
   //  {
   //      $data=DB::table('demo_log1_reg1')->where('name',$req->name)->where('password',$req->password)->get();
        
   //           return redirect('home');
        
   //  }



     public function add_data(Request $req)
    {
        $data= DB::table('demo_log1_reg1')->where('email',$req->email)->where('password',$req->password)->get();
            if ($data->isNotEmpty()) 
            {
                Alert::warning('Warning Title', 'Email already exists');
                return redirect()->back();
            }
            else
            {
        $regg1=new demo_log1_reg1;
        $regg1->name=$req->name;
        $regg1->email=$req->email;
        $regg1->password=$req->password;
        $regg1->role='user';
        $regg1->save();
        
        return view('log');
    }
    }


    public function index(Request $req)
     {
        $data= DB::table('demo_log1_reg1')->where('email',$req->email)->where('password',$req->password)->get();
            if ($data->isNotEmpty()) 
            {
                $role1=$data[0]->role;
                if ($role1=="user") 
                {
                        $req->session()->put('user',$data[0]->name);
                          $req->session()->put('email',$data[0]->email);
                        return redirect('home1');
                }
                elseif ($role1=="admin") 
                {
            
                        $req->session()->put('admin',$req->email);
                        return redirect('admin');
                }
            }
            else {
    
                            Alert::warning('Warning Title', 'Invalid username or password');
                            return redirect()->back()->withErrors(['failure'=>'Invalid username or password']);
            }  

       //return $data;
        //return $data[0]->fname;
    
        // $role1=$data[0]->role;
        // if($data.isNotEmpty())
        // {
        //     if ($role1=="user") {
        //         // code...
        //         if ($data->isNotEmpty()) 
        //         {

        //             $req->session()->put('user',$data[0]->name);
        //             return redirect('home1');
        //         }
        //         else{
        //             return redirect()->back()->withErrors(['failure'=>'Invalid username or password']);
        //         }
        //     }elseif ($role1=="admin") {
        //         // code...
        //         if ($data->isNotEmpty()) 
        //         {

        //             $req->session()->put('user',$req->email);
        //             return redirect('admin');
        //         }
        //         else{
        //             return redirect()->back()->withErrors(['failure'=>'Invalid admin or password']);
        //         }
        //     }
        // }
        // else
        // {
        //     return redirect()->back()->withErrors(['failure'=>'Invalid admin or password']);
        // }
    }

    public function flush(Request $req)
    {
        $r=$req->session()->flush();
        return redirect('home1');
    }

     public function flush1(Request $req)
    {
        $r=$req->session()->flush();
        return redirect('admin');
    }


     public function disp_user()
    {
         $data=DB::table('demo_log1_reg1')->get();
          return view('user',['data'=>$data]);  
                          
     }

 
}
