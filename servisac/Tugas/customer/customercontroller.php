<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\customermodel;

class customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            //array scalar tanpa join
         // $ar_customer = customer::orderBy('nama')->get();
         // $ar_customer = DB::table('customer')->get();

        //pake Join Table
         $ar_customer = DB::table('customer')->get();


         // Code konvensional query join table sebelum jadi defaultnya laravel seperti code diatas :
         // $ar_customer = "select customer.*, jabatan.nama AS posisi 
         //                from customer inner join jabatan on jabatan.id = customer.idjabatan";

        return view('customer/tampilancm', compact('ar_customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data baru
        return view('customer/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data customer
        DB::table('customer')->insert(
            [
                'namacustomer'=>$request->namacustomer,
                'gender'=>$request->gender,
                'alamat'=>$request->alamat,
                'kota'=>$request->kota,
                'hp'=>$request->hp
            ]);
 
        //landing page
        return redirect ('customermodel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = DB::table('customer')
         ->where('id',$id)
         ->get();


         return view('customer/show', compact('data'));

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
        //Hapus Table Berdasarkan Id yang Dipilih
        DB::table('customer')->delete()
        ->where('id',$id);

        //Landing Page
        return redirect ('customermodel');
    }
}
