 @extends('layouts.index')
 @section('content')

 @foreach ($data as $order)


 <div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <center><h5 class="card-title">{{$order->ncm}}</h5></center>
      <hr/>
      <p class="card-text">Nama Pegawai : {{$order->npeg}}</p>
      <p class="card-text">Keluhan : {{$order->keluhan}}</p>
      <p class="card-text">Unit : {{$order->unit}}</p>
      <p class="card-text">Jenis AC : {{$order->ac}}</p>
      <p class="card-text">Ukuran : {{$order->ukuran}}</p>
      <p class="card-text">Jenis Bangunan : {{$order->bangunan}}</p>
      <p class="card-text">Tanggal : {{$order->tanggal}}</p>
      <p class="card-text">Waktu : {{$order->waktu}}</p>
      <p class="card-text">Harga : {{$order->harga}}</p>

      
      <a href="{{url('ordermodel')}}" class="btn btn-facebook btn-user btn-block">
        <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp; KEMBALI
      </a>

    </div>
  </div>
</div>


@endforeach
@endsection