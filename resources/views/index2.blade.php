<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
=======
@extends('template')

@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary">+ Tambah Pegawai Baru</a>

	<p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai ..">
		<input type="submit" class="btn btn-info mt-2" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
>>>>>>> 44061e5 (pertemuan14)
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
<<<<<<< HEAD
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
=======
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
>>>>>>> 44061e5 (pertemuan14)
			</td>
		</tr>
		@endforeach
	</table>

<<<<<<< HEAD

</body>
</html>
=======
	<div class="d-flex justify-content-center">
		{{ $pegawai->links() }}
	</div>
@endsection
>>>>>>> 44061e5 (pertemuan14)
