    @extends('layouts.index')
    @section('content')
    @php
    $ar_judul = ['No','Nama','Gender','Alamat','Kota','No. Handphone',''];
    $no = 1;
    @endphp

    

    <!-- ---------------------- awal modal---------------------- -->

   <!-- Button trigger modal -->
    <a href="{{route('customermodel.create')}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square" style="color:white;"></i><br/>
      Add
    </a>

    <!-- Ini Button untuk Export to Excel -->
    <a href="customermodel/export" class="btn btn-success btn-sm"><i class="fas fa-file-excel" style="color:white;"></i><br/>Excel</a>
    <!-- Ini Button untuk Export to PDF -->
    <a href="customermodel/exportpdf" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf" style="color:white;"></i><br/>PDF</a>

    <br/>
    <br/>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Data customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('customermodel.store')}}" method="POST">
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
    <!-- ---------------------- akhir modal---------------------- -->
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data customer</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                @foreach($ar_judul as $jdl)
                <th>{{$jdl}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach($ar_customer as $customer)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$customer->namacustomer}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->alamat}}</td>
                <td>{{$customer->kota}}</td>
                <td>{{$customer->hp}}</td>

                <td align="center">

                   <form method="post" action="{{route('customermodel.destroy',$customer->id)}}">
                        @csrf
                        @method ('DELETE')
                  <a href="{{route('customermodel.show', $customer->id)}}"><i class="fas fa-eye" style="color:blue;"></i></a> &nbsp;

                  <a href="{{route('customermodel.edit',$customer->id)}}">
                    <i class="fas fa-pencil-alt" style="color:green;"></i></a>

                  <button type="submit" class="btn btn-link" onclick="return confirm ('Apakah anda yakin ingin di hapus?')"><i class="fas fa-trash-alt" style="color: red;"></i></button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    @endsection
