@extends('layout.master')
<!-- pengembangannya ada pada folder layout>> master.blade.php -->

@section('isi')
<!-- ini berfungsi memasukan isi pada master blade -->


<h1>Edit data customer</h1>
  <div class="row">
  <div class="col-lg-12">


<form action="/customermodel/{{$customer->id}}/update" method="POST">
            {{csrf_field()}}

      <!-- penamaanya harus sesuai database -->
            <div class="form-group">
                  <label for="exampleInputEmail1">
                  Nama customer
                  </label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namacustomer" value="{{$customer->namacustomer}}">
            </div>
                
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis kelamin
                  </label>
                  <select name="gender" class="form-control" id="exampleFormControlSelect1">
                      <option value="L">---Pilih Jenis Kelamin---</option>

                     	<option value="L" @if($customer->gender == 'L') selected @endif>Laki-Laki</option>
                      
                      <option value="P" @if($customer->gender == 'P') selected @endif>Perempuan</option>
                  </select>
            </div>
                 
            <div class="form-group">
                  <label >Alamat</label><br>
                  <textarea name="alamat" class="form-control" rows="3">{{$customer->alamat}}</textarea>
            </div>

            <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kota" value="{{$customer->kota}}">
            </div>

            <div class="form-group">
                  <label>Nomor Handphone</label>
                  <input type="number" class="form-control" name="hp" value="{{$customer->hp}}">
            </div>
               
            <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
            </div>

    </form>
</div>
</div>

@endsection