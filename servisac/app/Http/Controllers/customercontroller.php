<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\customerExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use DB;
use App\customermodel;

class customercontroller extends Controller
{
    
    public function index()
    {   
            //array scalar tanpa join
         // $ar_customer = customer::orderBy('nama')->get();
         // $ar_customer = DB::table('customer')->get();

        //pake Join Table
         $ar_customer = DB::table('customer')
                      ->orderBy('id', 'desc')
                      ->get();


         // Code konvensional query join table sebelum jadi defaultnya laravel seperti code diatas :
         // $ar_customer = "select customer.*, jabatan.nama AS posisi 
         //                from customer inner join jabatan on jabatan.id = customer.idjabatan";

        return view('customer/tampilancm', compact('ar_customer'));
    }

  
    public function create()
    {
        //arahkan ke form input data baru
        return view('customer/form');
    }

    
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
        return redirect ('/customermodel');
    }

   
    public function show($id)
    {
         $data = DB::table('customer')
         ->where('id',$id)
         ->get();


         return view('customer/show', compact('data'));

    }

   
    public function edit($id)
    {
          $data = customermodel::where('id', $id)->get();
        return view ('customer.update',compact('data'));
    }

    public function update(Request $request, $id)
    {
         DB::table('customer')
         ->where('id',$id)
         ->update(
        [
            'namacustomer'=>$request->nama,
            'gender'=>$request->jk,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'hp'=>$request->hp

         ]);

          return redirect('/customermodel'.'/'.$id);

    }

  
    public function destroy($id)
    {
        //Hapus Table Berdasarkan Id yang Dipilih
        DB::table('customer')
        ->where('id',$id)
        ->delete();

        //Landing Page
        return redirect ('customermodel');
    }

      public function export() 
    {
        return Excel::download(new customerexport, 'Data customer.xlsx');
    }

     public function exportpdf(){
        $customer = DB::table('customer')
         ->get();
    
        $pdf = PDF::loadView('export.customerpdf', ['customer' => $customer]);
        return $pdf->download('Data customer.pdf');
    }
}
