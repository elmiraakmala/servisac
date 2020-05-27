@php
$no = 1;
@endphp

<table class="table" cellpadding="1" cellspacing="1" border="1">
	<thead>
		<tr><th>No</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>No. Handphone</th>
			<th>Foto</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pegawai as $peg)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$peg->namapegawai}}</td>
			<td>{{$peg->gender}}</td>
			<td>{{$peg->alamat}}</td>
			<td>{{$peg->kota}}</td>
			<td>{{$peg->hp}}</td>
			<td>{{$peg->foto}}</td>
		</tr>
		@endforeach
	</tbody>
</table>