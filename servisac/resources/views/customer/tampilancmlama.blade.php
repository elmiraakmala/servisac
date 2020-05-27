@extends('layout.master')
<!-- pengembangannya ada pada folder layout>> master.blade.php -->

@section('isi')
<!-- ini berfungsi memasukan isi pada master blade -->


  <div class="row">


<div class="col-6">
        <h1>Data customer</h1> <br>

<!-- Button trigger modal -->
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                Tambahkan customer
              </button>
              <br>
              <br>
<!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Input Data Customer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                  </div>

<!-- Form -->
  <div class="modal-body">


    <form action="/customermodel/create" method="POST">
            {{csrf_field()}}

      <!-- penamaanya harus sesuai database -->
            <div class="form-group">
                  <label for="exampleInputEmail1">
                  Nama customer
                  </label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namacustomer">
            </div>
                
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis kelamin
                  </label>
                  <select name="gender" class="form-control" id="exampleFormControlSelect1">
                      <option value="L">---Pilih Jenis Kelamin---</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                  </select>
            </div>
                 
            <div class="form-group">
                  <label >Alamat</label><br>
                  <textarea name="alamat" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kota">
            </div>

            <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Handphone</label>
                  <input type="number" class="form-control" name="hp">
            </div>
                
                
                
               
            <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>

            </div>

    </form>

</div>
          
          </div>
      </div>
  </div>
</div>





<table class="table table-striped table-light table-hover">
          <br>
          <br>
          <tr class="table-primary" >
            <th>Nama customer</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>kota</th>
            <th>hp</th>
           <th></th>
          </tr>



          @foreach($coba as $customer)

          <tr >
            
            <td>{{$customer->namacustomer}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->alamat}}</td>
            <td>{{$customer->kota}}</td>
            <td>{{$customer->hp}}</td>
              <td>
            <a href="/customermodel/{{$customer->id}}/edit" class="btn btn-primary btn-sm">Edit</a> 
            &nbsp;&nbsp;
            <a href="/customermodel/{{$customer->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin di hapus?')">Delete</a>

          </td>

          </tr>
          <!-- {{}} >> arti 2 penutup kurung kurawal ini untuk memanggik data di database sedang kurung kurawal 1 {} itu untuk memanggil data,gambar,dll -->

        @endforeach <!-- fungsi @ itu artinya hampir sama kaya fungsi php jadi kaya di peringkas gitu pemanggilannya -->



</table>

<!-- index.blade.php adalah untuk tampilan dari function view -->

</div>
  </div>

@endsection
