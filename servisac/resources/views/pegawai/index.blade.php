    @extends('layouts.index')
    @section('content')
    @php
    $ar_judul = ['No','Nama','Gender','Alamat','Kota','No. Handphone','Foto',''];
    $no = 1;
    @endphp

    

    <!-- ---------------------- awal modal---------------------- -->

    <!-- Button trigger modal -->
    @if(Auth::user()->role == 'admin')
    <a href="{{route('pegawaimodel.create')}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square" style="color:white;"></i><br/>
      Add
    </a>

    <!-- Ini Button untuk Export to Excel -->
    <a href="pegawaimodel/export" class="btn btn-success btn-sm"><i class="fas fa-file-excel" style="color:white;"></i><br/>Excel</a>
    <!-- Ini Button untuk Export to PDF -->
    <a href="pegawaimodel/exportpdf" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf" style="color:white;"></i><br/>PDF</a>
    @endif
    <br/>
    <br/>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Data pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('pegawaimodel.store')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <!-- penamaanya harus sesuai database -->
              <div class="form-group" >
                <label for="exampleInputEmail1">
                  Nama pegawai
                </label>

                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namapegawai">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis kelamin
                </label>
                <select name="gender" class="form-control" id="exampleFormControlSelect1">
                  <option value="">---Pilih Jenis Kelamin---</option>
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

              <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input type="file" class="form-control" name="foto">
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
        <h6 class="m-0 font-weight-bold text-primary">Data pegawai</h6>
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
              @foreach($ar_pegawai as $pegawai)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$pegawai->namapegawai}}</td>
                <td>{{$pegawai->gender}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>{{$pegawai->kota}}</td>
                <td>{{$pegawai->hp}}</td>
                <td>
                  <center>
                    @if(!empty($pegawai->foto))
                    <img src="{{asset('img')}}/{{$pegawai->foto}}" width="30%" />
                    @else
                    <img src="{{asset('img')}}/no-image.jpg" width="30%" />
                    @endif
                  </center>
                </td>

                <td width="15%">
                 <center>
                   <form method="POST" action="{{route('pegawaimodel.destroy',$pegawai->id)}}">
                    @csrf
                    @method ('DELETE')
                    <!-- Icon eye untuk mengarahkan ke data detail -->
                    <a href="{{route('pegawaimodel.show', $pegawai->id)}}"><i class="fas fa-eye" style="color:blue;"></i></a> &nbsp;

                    <!-- Icon pencil untuk mengarahkan ke form edit -->
                    <a href="{{route('pegawaimodel.edit',$pegawai->id)}}">
                      <i class="fas fa-pencil-alt" style="color:green;"></i></a>

                      <!-- Icon trash untuk mengarahkan destroy(hapus) -->
                      <button type="submit" class="btn btn-link" onclick="return confirm ('Apakah anda yakin ingin di hapus?')"><i class="fas fa-trash-alt" style="color: red;"></i>
                      </button>
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

