@extends('layouts.index') 
@section('content')



<div class="container">
	<div class="main">
		<div class="main-center">
			<h3>Edit Form Order</h3>
			</br>
			@foreach($data as $d)
			<form class="" method="POST" action="{{route('ordermodel.update',$d->id)}}">
				@csrf
				@method('PUT')	

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
						@php
						//edit nama customer yg lama
						$sel = ($d->idcustomer == $row->id) ? 'selected' : '';
						@endphp
						<option value="{{ $row->id }}" {{$sel}}>{{ $row->namacustomer }}</option>
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
						<option value="">-- Pilih Pegawai --</option>
						@foreach($rs as $row)
						@php
						//edit nama pegawai yg lama
						$sel2 = ($d->idpegawai == $row->id) ? 'selected' : '';
						@endphp
						<option value="{{ $row->id }}" {{$sel2}}>{{ $row->namapegawai }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">
						Jenis Jasa
					</label>
					<select name="jasa" class="form-control" id="exampleFormControlSelect1">
						<option value="">---Pilih Jasa---</option>
						<option value="Cuci AC Atau Isi Freon" @if($d->jenisjasa == 'Cuci AC Atau Isi Freon') selected @endif > Cuci AC Atau Isi Freon
						</option>
						<option value="Bongkar atau Pasang AC" @if($d->jenisjasa == 'Bongkar atau Pasang AC') selected @endif> Bongkar atau Pasang AC
						</option>
						<option value="Memperbaiki AC" @if($d->jenisjasa == 'Memperbaiki AC') selected @endif> Memperbaiki AC
						</option>
					</select>
				</div>

				<div class="form-group">
					<label >Keluhan</label><br>
					<textarea name="keluhan" class="form-control" rows="3">{{ $d->keluhan }}</textarea>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Jumlah Unit</label>
					<input type="number" class="form-control" name="jml" value="{{$d->unit}}">
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">
						Jenis AC
					</label>
					<select name="ac" class="form-control" id="exampleFormControlSelect1">
						<option value="">---Pilih Jenis AC---</option>
						<option value="Split" @if($d->ac == 'Split') selected @endif> Split </option>
						<option value="Window" @if($d->ac == 'Window') selected @endif> Window </option>
						<option value="Central" @if($d->ac == 'Central') selected @endif> Central </option>
						<option value="Standing" @if($d->ac == 'Standing') selected @endif> Standing </option>
						<option value="Cassete" @if($d->ac == 'Cassete') selected @endif> Cassete </option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">
						Jenis Ukuran
					</label>
					<select name="size" class="form-control" id="exampleFormControlSelect1">
						<option value="">---Pilih Ukuran---</option>
						<option value="< 1PK" @if($d->ukuran == '< 1PK') selected @endif> < 1PK </option>
						<option value="1 PK - 2 PK" @if($d->ukuran == '1 PK - 2 PK') selected @endif> 1 PK - 2 PK </option>
						<option value="2 PK" @if($d->ukuran == '2 PK') selected @endif> > 2 PK </option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">
						Jenis Bangunan
					</label>
					<select name="bgn" class="form-control" id="exampleFormControlSelect1">
						<option value="">---Pilih Jenis Bangunan---</option>
						<option value="Gedung" @if($d->bangunan == 'Gedung') selected @endif> Gedung </option>
						<option value="Rumah" @if($d->bangunan == 'Rumah') selected @endif> Rumah </option>
						<option value="Ruko" @if($d->bangunan == 'Ruko') selected @endif> Ruko </option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Tanggal</label>
					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="{{ $d->tanggal }}">
				</div>


				<div class="form-group">
					<label for="exampleInputEmail1">Waktu</label>
					<input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="waktu" value="{{ $d->waktu }}">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="{{ $d->harga }}">
				</div>



				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Update</button>

				</div>

			</form>
			@endforeach
		</div>
	</div>
</div>
</div>

</body>
</html>

@endsection
