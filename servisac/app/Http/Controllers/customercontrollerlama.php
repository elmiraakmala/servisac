<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroller extends Controller
{
    public function tampilan(Request $request)
	{
        if ($request->has('cari'))
            {
                $data_customer =\App\customermodel::where('namacustomer','LIKE','%'.$request->cari.'%')->get();
            }

        else 
    		{
            $data_customer = \App\customermodel::all(); //jadi customernya adalah sebuah file
            } 

		return view ('customer.tampilancm',['coba' => $data_customer]); //customer.index itu artinya letaknya di bagian folder view>> folder customer >> file index.blade.php
	}
    
    public function create(Request $request)
    {
    	\App\customermodel::create($request->all());
    	return redirect('/customermodel');
    }

     public function edit($id)
    {
        $customer = \App\customermodel::find($id);
        return view('customer.editcm',['customer'=>$customer]);
    }

    public function update(Request $request, $id)
    {
        $customer=\App\customermodel::find($id);
        $customer->update($request->all());
        return redirect('/customermodel');
    }
     public function delete($id)
    {
        $customer=\App\customermodel::find($id);
        $customer->delete($customer);
        return redirect('/customermodel');    

    }


}
