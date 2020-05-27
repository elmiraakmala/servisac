<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\datamodel;

class datacontroller extends Controller
{
    
    public function index()
    {
        $ar_customer = DB::table('customer')
        ->orderBy('id', 'desc')
        ->get();
        return view('whisper/register', compact('ar_customer'));
    }

    
    public function create()
    {
      return view('whisper/register');
  }

  
  public function store(Request $request)
  {
    DB::table('customer')->insert(
        [
            'namacustomer'=>$request->namacustomer,
            'gender'=>$request->gender,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'hp'=>$request->hp
        ]);
    
        //landing page
    return view('whisper/order');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
