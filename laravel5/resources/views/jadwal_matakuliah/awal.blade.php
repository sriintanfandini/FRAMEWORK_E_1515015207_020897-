@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data jadwal mahasiwsa</strong>
		<a href="{{url('jadwalmatakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>jadwal mahasiswa</a>
			<div class="clearfix"></div>
	</div>
	
	<table class="table">
		<thead>
		<tr>
			<th>no</th>
			<th>Nama mahasiswa id</th>
			<th>Nim mahasiswa</th>
			<th>Nama matakuliah</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuajadwal_matakuliah as $jadwal_matakuliah)
				<tr>
					<td>{{ $x++ }}</td>
					
					<td>{{ $jadwal->mahasiswa->Nama or 'Nama kosong'}}</td>
					<td>{{ $jadwal->mahasiswa->Nim or 'Nim kosong'}}</td>
					<td>{{ $jadwal->dosen_matakuliah->matakuliah->title or 'matakuliah kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('jadwal_matakuliah/'.$jadwal_matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-premove"></i>
							</a>
						</div>

						</td>
						</tr>
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop