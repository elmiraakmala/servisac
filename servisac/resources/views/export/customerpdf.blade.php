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
		</tr>
	</thead>
	<tbody>
		@foreach($customer as $cm)
		<tr>
		<td>{{$no++}}</td>
		<td>{{$cm->namacustomer}}</td>
		<td>{{$cm->gender}}</td>
		<td>{{$cm->alamat}}</td>
		<td>{{$cm->kota}}</td>
		<td>{{$cm->hp}}</td>
		</tr>
		@endforeach
	</tbody>
</table>