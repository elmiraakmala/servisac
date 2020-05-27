 @extends('layouts.index')
 @section('content')

 @foreach ($data as $peg)


 <div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <center>
        @if(!empty($peg->foto))
        <img src="{{asset('img')}}/{{$peg->foto}}" width="90%" />
        @else
        <img src="{{asset('img')}}/no-image.jpg" width="90%" />
        @endif
      </center>
    </br>
      <h5 class="card-title">Nama : {{$peg->namapegawai}}</h5>
      <p class="card-text">Jenis kelamin : {{$peg->gender}}</p>
      <p class="card-text">Alamat : {{$peg->alamat}}</p>
      <p class="card-text">Kota : {{$peg->kota}}</p>
      <p class="card-text">No Handphone : {{$peg->hp}}</p>
      
      <a href="{{url('pegawaimodel')}}" class="btn btn-facebook btn-user btn-block">
        <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp; KEMBALI
      </a>

    </div>
  </div>
</div>



@endforeach
@endsection