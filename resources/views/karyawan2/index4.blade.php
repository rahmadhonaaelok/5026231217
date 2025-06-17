@extends('template')

@section('content')
	<h3>Data Karyawan</h3>
	<p>Cari Data Karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Karyawan .."  value="{{ $cari ?? '' }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

    <br/>
	<table class="table table-striped">
		<tr>
            <th>Kode Karyawan</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td>
            <td>
                <a href="/karyawan/hapus/{{$k->kodepegawai}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary">Tambah Data</a>
    <br>
    {{-- {{ $karyawan->links() }} --}}
    <br>
@endsection
