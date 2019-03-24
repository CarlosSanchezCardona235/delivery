<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces=Province::orderBy('id','DESC')->paginate(10);

        return view('provinces.index',['provinces'=>$provinces]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinces.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Province=new Province();

        $Province->name=$request->name;
        $Province->code=$request->code;
        $Province->save();

         return redirect('provinces');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $province=Province::find($id);
        return view('provinces.show',['province'=>$province]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $province=Province::find($id);

        return view('provinces.edit',['province'=>$province]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());

        $Province=Province::find($id);
        $Province->name=$request->name;
        $Province->code=$request->code;
        $Province->save();

        return redirect('provinces'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Province=Province::find($id);
        $Province->delete();
         return redirect('provinces');
    }
}
