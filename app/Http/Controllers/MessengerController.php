<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messenger;
use App\Province;
class MessengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messengers=Messenger::orderBy('id','DESC')->paginate(10);

        return view('messengers.index',['messengers'=>$messengers]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $provinces=Province::all();
        return view('messengers.create',['provinces'=>$provinces]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $Messenger=new Messenger();

        $Messenger->name=$request->name;
        $Messenger->lastname=$request->lastname;
        $Messenger->email=$request->email;
        $Messenger->phone=$request->phone;
        $Messenger->age=$request->age;
        $Messenger->province_id=$request->province_id;
        $Messenger->save();

        return redirect('messengers');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces=Province::all()->pluck('name', 'id');
        $messenger=Messenger::find($id);
        return view('messengers.edit',['messenger'=>$messenger,'provinces'=>$provinces]);
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
        $Messenger=Messenger::find($id);
        $Messenger->name=$request->name;
        $Messenger->lastname=$request->lastname;
        $Messenger->email=$request->email;
        $Messenger->phone=$request->phone;
        $Messenger->age=$request->age;
        $Messenger->province_id=$request->province_id;

        $Messenger->save();

        return redirect('messengers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
