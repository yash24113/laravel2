<?php

namespace App\Http\Controllers;

use App\Models\boatt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoattController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $boat=boatt::paginate(2);
        return view('index',compact('boat'));
      //   return view('temple',compact('boat'));

          // $boat=new boat;
        // $boat=boatt::all();
        //  return view('temple');
        // return $boatts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        boatt::create($request->all());
        return redirect()->route('boatt.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(boatt $boatt)
    {
        //



    }


       public function boatt_data()
    {
         $data=DB::table('boatts')->get();
          return view('temple',['data'=>$data]);  
                          
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(boatt $boatt)
    {
        //

        return view('edit1',compact('boatt'));
             return redirect()->route('boatt.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boatt $boatt)
    {
        //
        $boatt->update($request->all());
         return redirect()->route('boatt.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boatt $boatt)
    {
        $d=$boatt->delete();
         // $boatt->delete($request->all());
        // return redirect()->route('boatt.index');
        // $boatt= boatt::find($id);
        // boatt->delete();
        if($d)
        {
         return back()->with('success','delete successfully');
        }
    }
}
