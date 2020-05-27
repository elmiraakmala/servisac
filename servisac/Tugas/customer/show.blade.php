 @extends('layouts.index')
 @section('content')

 @foreach ($data as $cm)


 <div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Nama : {{$cm->namacustomer}}</h5>
      <p class="card-text">Jenis kelamin : {{$cm->gender}}</p>
      <p class="card-text">Alamat : {{$cm->alamat}}</p>
      <p class="card-text">Kota : {{$cm->kota}}</p>
      <p class="card-text">No Handphone : {{$cm->hp}}</p>
      
      <a href="{{url('customermodel')}}" class="btn btn-facebook btn-user btn-block">
        <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp; KEMBALI
      </a>

    </div>
  </div>
</div>





@endforeach
@endsection