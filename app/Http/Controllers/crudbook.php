<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class crudbook extends Controller
{
    public function add_data1(Request $req)
    {
    
        $message="Invalid Mobile Number";
        $req->validate([
             'phone'=>'required|min:10'
         ]);
    
        $res=DB::table('crudbook1')->insert(['name'=>$req->name,'email'=>$req->email,'phone'=>$req->phone,'address'=>$req->address,'location'=>$req->location,'price'=>$req->price,'guests'=>$req->guests,'arrivals'=>$req->arrivals,'leaving'=>$req->leaving]);
        Alert::success('Success', 'Your Booking Successfully');
        return redirect('book');
    }


     public function disp_data1()
    {
         $data=DB::table('crudbook1')->get();
          return view('book_disp',['data'=>$data]);  
                          
     }
    
    public function disp_data2()
    {
         $data=DB::table('crudbook1')->where('name',session('user'))->get();
          return view('book_disp1',['data'=>$data]);  
                          
     }


  /*   booking package value in the form */
     
     public function fetch_data($id)
     {

        // $data=DB::table('snow')->where('id',$id)->get();
        
        // return view('book',['data'=>$data]);  
        if(session()->has('user'))
        {
            $data=DB::table('snow')->where('id',$id)->get();
            $package=$data[0]->package;
              $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            //return redirect('test');
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
           
     }

     public function fetch_data1($id)
     {
      // $data=DB::table('crud')->where('id',$id)->get();
      //     return view('book',['data'=>$data]); 
       if(session()->has('user'))
        {
            $data=DB::table('crud')->where('id',$id)->get();
            $package=$data[0]->package;
              $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            //return redirect('test');
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        } 
    }

     public function fetch_data2($id)
     {
      // $data=DB::table('arc')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);   if(session()->has('user'))
        if(session()->has('user'))
        {
            $data=DB::table('arc')->where('id',$id)->get();
            $package=$data[0]->package;
              $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            //return redirect('test');
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        } 

    }

     public function fetch_data3($id)
     {
      // $data=DB::table('camp1')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);  

         if(session()->has('user'))
        {
            $data=DB::table('camp1')->where('id',$id)->get();
            $package=$data[0]->package;
              $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            //return redirect('test');
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
    }


     public function fetch_data4($id)
     {
      // $data=DB::table('hawai')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);  

         if(session()->has('user'))
        {
            $data=DB::table('hawai')->where('id',$id)->get();
            $package=$data[0]->package;
            $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
    }


     public function fetch_data5($id)
     {
      // $data=DB::table('place')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);  

         if(session()->has('user'))
        {
            $data=DB::table('place')->where('id',$id)->get();
            $package=$data[0]->package;
            $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
    }


     public function fetch_data6($id)
     {
      // $data=DB::table('amazing1')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);  

         if(session()->has('user'))
        {
            $data=DB::table('amazing1')->where('id',$id)->get();
            $package=$data[0]->package;
            $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
    }


      public function fetch_data7($id)
     {
      // $data=DB::table('amazing1')->where('id',$id)->get();
      //     return view('book',['data'=>$data]);  

         if(session()->has('user'))
        {
            $data=DB::table('boatts')->where('id',$id)->get();
            $package=$data[0]->package;
            $price=$data[0]->price;
            
            return redirect('book')->with('package',$package)->with('price',$price);  
            
        }
        else{
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();
        }
    }


  


      public function deletebook11($id)
    {
        $res = DB::table('crudbook1')->where('id', $id)->delete();
        return redirect('book_disp1');
    }
    // public function bb(Request $role1)
    //  {
        
    //             if ($role1=="user") {
    //                     $req->session()->put('user',$data[0]->name);
    //                     return redirect('book');
    //             }
            
    //         else {
    
    //                         return redirect()->back()->withErrors(['failure'=>'first login after booking']);
    //         }   
    // }
    // public function start(Request $req)
    // {
    //     $r=$req->session()->();
    //     return redirect('log');
    // }



     public function bb(Request $req)
     {
        
        if($req->session()->has('user'))
        {
//            $req->session()->put('user',$data[0]->name);
            return view('book');

        }
        else
        {
                Alert::warning('Warning', 'Need to login first for booking package');
            return redirect()->back();

        }    
        // $data= DB::table('demo_log1_reg1')->where('email',$req->email)->where('password',$req->password)->get();
        //     if ($data->isNotEmpty()) 
        //     {
        //         $role1=$data[0]->role;
        //         if ($role1=="user") 
        //         {
        //                 $req->session()->put('user',$data[0]->name);
        //                 return redirect('book');
        //         }
                
        //     }
        //     else {
    
        //                     return redirect()->back()->withErrors(['failure'=>'first login after booking']);
        //     }  
    }
}
