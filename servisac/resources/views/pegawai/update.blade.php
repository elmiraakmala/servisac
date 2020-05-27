@extends('layouts.index') 
@section('content')



<div class="container">
	<div class="main">
		<div class="main-center">
			<h3>Edit Form Pegawai</h3>
			@foreach($data as $d)
			<form class="" method="post" action="{{route('pegawaimodel.update',$d->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')			
				<div class="form-group">
					<label for="name">Nama </label>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" name="nama" id="name"  placeholder="Nama lengkap" value="{{$d->namapegawai}}" />
					</div>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">
						Jenis Kelamin
					</label>
					<select name="jk" class="form-control" id="exampleFormControlSelect1">
						<option value="">---Pilih Gender---</option>
						<option value="L" @if($d->gender == 'L') selected @endif> Laki-Laki </option>
						<option value="P" @if($d->gender == 'P') selected @endif> Perempuan </option>
					</select>
				</div>

<!-- 				<div class="form-group">
					@php
					$ar_jk = ['L','P'];
					@endphp
					<label>Jenis kelamin</label>
					@foreach($ar_jk as $jk)
					@php
					$cek = ($d->gender == $jk) ? 'checked' : '';
					@endphp
					<br>
					<input type="radio" name="jk" value="{{ $jk }}" {{$cek}} />
					{{ $jk }}
				</div>
				@endforeach
			</div> -->

			<div class="form-group">
				<label >Alamat</label>
				<div class="input-group">
					<span class="input-group-addon"></span>
					<textarea name="alamat" class="form-control">{{ $d->alamat }}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label >Kota</label>
				<div class="input-group">
					<span class="input-group-addon"></span>
					<input  type="text" class="form-control" name="kota" placeholder="Kota Domisili" value="{{ $d->kota}}"/>
				</div>
			</div>

			<div class="form-group">
				<label>Nomor Handphone</label>
				<div class="input-group">
					<span class="input-group-addon"></span>
					<input type="number" class="form-control" name="hp" placeholder="Masukkan Nomor Handphone" value="{{ $d->hp }}"/>
				</div>
			</div>

			<div class="form-group">
				<label>Foto</label>
				<div class="input-group">
					<span class="input-group-addon"></span>
					<input type="file" class="form-control" name="foto" value="{{ $d->foto }}"/>
				</div>
			</div>

			<br>
			<button type="submit"  class="btn btn-primary">SIMPAN</button>
			
		</form>

		@endforeach
	</div><!--main-center"-->
</div><!--main-->
</div><!--container-->

</body>
</html>

@endsection