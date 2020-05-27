<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use DB;
use App\pegawaimodel;

class pegawaicontroller extends Controller
{

  public function index()
  {   
            //array scalar tanpa join
         // $ar_pegawai = pegawai::orderBy('nama')->get();
         // $ar_pegawai = DB::table('pegawai')->get();

        //pake Join Table
   $ar_pegawai = DB::table('pegawai')
   ->orderBy('id', 'desc')
   ->get();


         // Code konvensional query join table sebelum jadi defaultnya laravel seperti code diatas :
         // $ar_pegawai = "select pegawai.*, jabatan.nama AS posisi 
         //                from pegawai inner join jabatan on jabatan.id = pegawai.idjabatan";

   return view('pegawai/index', compact('ar_pegawai'));
 }


 public function create()
 {
        //arahkan ke form input data baru
  return view('pegawai/index');
}


public function store(Request $request)
{
 $file = $request->file('foto');
 $nama_file = $file->getClientOriginalName();

 $tujuan_upload = 'img';
 $file->move($tujuan_upload,$nama_file);

        //insert data pegawai
 DB::table('pegawai')->insert(
  [
  'namapegawai'=>$request->namapegawai,
  'gender'=>$request->gender,
  'alamat'=>$request->alamat,
  'kota'=>$request->kota,
  'hp'=>$request->hp,
  'foto'=>$nama_file
  ]);
 
        //landing page
 return redirect ('pegawaimodel');
}


public function show($id)
{
 $data = DB::table('pegawai')
 ->where('id',$id)
 ->get();


 return view('pegawai/show', compact('data'));

}


public function edit($id)
{
  $data = pegawaimodel::where('id', $id)->get();
  return view ('pegawai.update',compact('data'));
}

public function update(Request $request, $id)
{

  $file = $request->file('foto');
  $nama_file = $file->getClientOriginalName();

  $tujuan_upload = 'img';
  $file->move($tujuan_upload,$nama_file);

  
  DB::table('pegawai')
  ->where('id',$id)
  ->update(
    [
    'namapegawai'=>$request->nama,
    'gender'=>$request->jk,
    'alamat'=>$request->alamat,
    'kota'=>$request->kota,
    'hp'=>$request->hp,
    'foto'=>$nama_file

    ]);

  return redirect('/pegawaimodel'.'/'.$id);

}


public function destroy($id)
{
        //Hapus Table Berdasarkan Id yang Dipilih
  DB::table('pegawai')
  ->where('id',$id)
  ->delete();

        //Landing Page
  return redirect ('pegawaimodel');
}

public function export() 
{
  return Excel::download(new pegawaiexport, 'Data Pegawai.xlsx');
}

public function exportpdf(){
  $pegawai = DB::table('pegawai')
  ->get();

  $pdf = PDF::loadView('export.pegawaipdf', ['pegawai' => $pegawai]);
  return $pdf->download('Data Pegawai.pdf');
}

}
