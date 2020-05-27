    @extends('layouts.index')
    @section('content')
    @php
    $ar_judul = ['No','Nama Customer','Nama Pegawai','Jenis Jasa','Keluhan','Jumlah Unit','Jenis AC','Ukuran','Harga',''];
    $no = 1;
    @endphp

    

    <!-- ---------------------- awal modal---------------------- -->

    <!-- Button trigger modal -->
    <a href="{{route('ordermodel.create')}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square" style="color:white;"></i><br/>
      Add
    </a>

    <!-- Ini Button untuk Export to Excel -->
    <a href="ordermodel/export" class="btn btn-success btn-sm"><i class="fas fa-file-excel" style="color:white;"></i><br/>Excel</a>
    <!-- Ini Button untuk Export to PDF -->
    <a href="ordermodel/exportpdf" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf" style="color:white;"></i><br/>PDF</a>

    <br/>
    <br/>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Data order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('ordermodel.store')}}" method="POST">
              {{csrf_field()}}

              <!-- penamaanya harus sesuai database -->
              
              <div class="form-group">
                @php

                $rs = App\customermodel::all();
                @endphp
                <label for="exampleInputEmail1">
                  Nama Customer
                </label>
                <select name="ncm" class="form-control">
                  <option value="">-- Pilih Customer --</option>
                  @foreach($rs as $row)
                  <option value="{{ $row->id }}">{{ $row->namacustomer }}</option>
                  @endforeach
                </select>
              </div>

            
              <div class="form-group">
                @php

                $rs = App\pegawaimodel::all();
                @endphp
                <label for="exampleInputEmail1">
                  Nama Pegawai
                </label>
                <select name="npg" class="form-control">
                  <option value="">-- Pilih pegawai --</option>
                  @foreach($rs as $row)
                  <option value="{{ $row->id }}">{{ $row->namapegawai }}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group">
                <label for="exampleFormControlSelect1">
                  Jenis Jasa
                </label>
                <select name="jasa" class="form-control" id="exampleFormControlSelect1">
                  <option>---Pilih Jasa---</option>
                  <option >Cuci AC Atau Isi Freon</option>
                  <option>Bongkar atau Pasang AC</option>
                  <option>Memperbaiki AC</option>
                </select>
              </div>

              <div class="form-group">
                <label >Keluhan</label><br>
                <textarea name="keluhan" class="form-control" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Unit</label>
                <input type="number" class="form-control" name="jml">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">
                  Jenis AC
                </label>
                <select name="ac" class="form-control" id="exampleFormControlSelect1">
                  <option>---Pilih Jenis AC---</option>
                  <option >Split</option>
                  <option>Window</option>
                  <option>Central</option>
                  <option>Standing</option>
                  <option>Cassete</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">
                  Jenis Ukuran
                </label>
                <select name="size" class="form-control" id="exampleFormControlSelect1">
                  <option>---Pilih Ukuran---</option>
                  <option > < 1PK </option>
                  <option> 1 PK - 2 PK </option>
                  <option> > 2 PK </option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">
                  Jenis Bangunan
                </label>
                <select name="bgn" class="form-control" id="exampleFormControlSelect1">
                  <option>---Pilih Jenis Bangunan---</option>
                  <option > Gedung </option>
                  <option> Rumah </option>
                  <option> Ruko </option>
                </select>
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Waktu</label>
                <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="waktu">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
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
        <h6 class="m-0 font-weight-bold text-primary">Data order</h6>
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
              @foreach($ar_order as $order)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$order->ncm}}</td>
                <td>{{$order->npeg}}</td>
                <td>{{$order->jenisjasa}}</td>
                <td>{{$order->keluhan}}</td>
                <td>{{$order->unit}}</td>
                <td>{{$order->ac}}</td>
                <td>{{$order->ukuran}}</td>
                <td>Rp. {{ number_format($order->harga).''.''.'' }}</td>

                <td width="15%">
                 <center>
                   <form method="POST" action="{{route('ordermodel.destroy',$order->id)}}">
                    @csrf
                    @method ('DELETE')
                    <a href="{{route('ordermodel.show', $order->id)}}"><i class="fas fa-eye" style="color:blue;"></i></a> &nbsp;
                    <a href="{{route('ordermodel.edit',$order->id)}}">
                      <i class="fas fa-pencil-alt" style="color:green;"></i>
                    </a>

                    @if(Auth::user()->role == 'admin')
                      <button type="submit" class="btn btn-link" onclick="return confirm ('Apakah anda yakin ingin di hapus?')"><i class="fas fa-trash-alt" style="color: red;"></i>
                      </button>
                    @endif
                    </center>
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
