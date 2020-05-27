 @extends('layouts.index')
 @section('content')

 @foreach ($data as $peg)


 <div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Nama : {{$peg->namapegawai}}</h5>
      <p class="card-text">Jenis kelamin : {{$peg->gender}}</p>
      <p class="card-text">Alamat : {{$peg->alamat}}</p>
      <p class="card-text">Kota : {{$peg->kota}}</p>
      <p class="card-text">No Handphone : {{$peg->hp}}</p>
      
      <a href="{{url('customermodel')}}" class="btn btn-facebook btn-user btn-block">
        <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp; KEMBALI
      </a>

    </div>
  </div>
</div>





@endforeach
@endsection