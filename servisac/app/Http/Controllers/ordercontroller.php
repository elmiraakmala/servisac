<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\orderExport;
use Maatwebsite\Excel\Facades\Excel;

use DB;
use App\ordermodel;
use App\pegawaimodel; 
use App\customermodel; 


class ordercontroller extends Controller
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
         return view('order.index');
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

        return redirect('/ordermodel');
    }

   
    public function show($id)
    {

         $data = DB::table('order')
         ->join('customer','customer.id','=','order.idcustomer')
         ->join('pegawai','pegawai.id','=','order.idpegawai')
         ->select('order.*', 'pegawai.namapegawai AS npeg', 'customer.namacustomer AS ncm')
         ->get();


         return view('order/show', compact('data'));
    }

   
    public function edit($id)
    {
        $data = ordermodel::where('id', $id)->get();
        return view ('order.update',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
         DB::table('order')
         ->where('id',$id)
         ->update(
            
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

        return redirect('/ordermodel');
    }

    
    public function destroy($id)
    {
        DB::table('order')
        ->where('id',$id)
        ->delete();

        //Landing Page
        return redirect ('ordermodel');
    }
}
