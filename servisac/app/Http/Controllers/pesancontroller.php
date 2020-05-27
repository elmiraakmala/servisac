<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\ordermodel;
use App\pegawaimodel; 
use App\customermodel;

class pesancontroller extends Controller
{
    
    public function index()
    {
         $ar_order = DB::table('order')
            ->join('pegawai', 'pegawai.id', '=', 'order.idpegawai')
            ->join('customer', 'customer.id', '=', 'order.idcustomer')
            ->select('order.*', 'pegawai.namapegawai AS npeg', 'customer.namacustomer AS ncm')
            ->orderBy('id', 'desc')
            ->get();
            return view('order.index',compact('ar_order'));
    }

    
    public function create()
    {
         return view('whisper.order');
    }

   
    public function store(Request $request)
    {
         DB::table('order')->insert(
            
            [
                'idcustomer'=>$request->ncm,
                'idpegawai'=>$request->npg,
                'jenisjasa'=>$request->jasa,
                'keluhan'=>$request->keluhan,
                'unit'=>$request->jml,
                'ac'=>$request->ac,
                'ukuran'=>$request->size,
                'bangunan'=>$request->bgn,
                'tanggal'=>$request->tanggal,
                'waktu'=>$request->waktu,
                'harga'=>$request->harga,
            ]

        );

        return view ('whisper.index');
    }

  
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
