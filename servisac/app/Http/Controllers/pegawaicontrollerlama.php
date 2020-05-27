<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pegawaicontroller extends Controller
{
	public function tampilan(Request $request)
	{

		if ($request->has('cari'))
			{
				$data_pegawai =\App\pegawaimodel::where('namapegawai','LIKE','%'.$request->cari.'%')->get();
			}
		else 
			{
				$data_pegawai = \App\pegawaimodel::all(); //jadi pegawainya adalah sebuah file
			}

		return view ('pegawai.tampilan',['coba' => $data_pegawai]); //pegawai.index itu artinya letaknya di bagian folder view>> folder pegawai >> file index.blade.php
	}
    
    public function add(Request $request)
    {
    	\App\pegawaimodel::add($request->all());
    	return redirect('/pegawaimodel');
    }

      public function ubah($id)
    {
    	$pegawai = \App\pegawaimodel::find($id);
    	return view('pegawai.ubah',['pegawai'=>$pegawai]);
    }

    public function update(Request $request, $id)
    {
    	$pegawai=\App\pegawaimodel::find($id);
    	$pegawai->update($request->all());
    	return redirect('/pegawaimodel');
    }
     public function hapus($id)
    {
    	$pegawai=\App\pegawaimodel::find($id);
		$pegawai->hapus($pegawai);
    	return redirect('/pegawaimodel');
    		

    }

}
