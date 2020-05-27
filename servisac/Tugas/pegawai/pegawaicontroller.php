<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\pegawaimodel;

class pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //array scalar tanpa join
         // $ar_pegawai = pegawai::orderBy('nama')->get();
         // $ar_pegawai = DB::table('pegawai')->get();

        //pake Join Table
         $ar_pegawai = DB::table('pegawai')->get();


         // Code konvensional query join table sebelum jadi defaultnya laravel seperti code diatas :
         // $ar_pegawai = "select pegawai.*, jabatan.nama AS posisi 
         //                from pegawai inner join jabatan on jabatan.id = pegawai.idjabatan";

        return view('pegawai/index', compact('ar_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data baru
        return view('pegawai/tampilancm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //insert data pegawai
        DB::table('pegawai')->insert(
            [
                'namapegawai'=>$request->namapegawai,
                'gender'=>$request->gender,
                'alamat'=>$request->alamat,
                'kota'=>$request->kota,
                'hp'=>$request->hp
            ]);
 
        //landing page
        return redirect ('pegawaimodel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('pegawai')
         ->where('id',$id)
         ->get();


         return view('pegawai/show', compact('data'));
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
