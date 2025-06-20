@extends('template')

@section('content')
	<h3>Data meja</h3>

	<a href="/meja/tambah" class="btn btn-primary"> + Tambah meja Baru</a>

    <p>Cari Data meja :</p>
	<form action="/meja/cari" method="GET">
		<input type="text" name="cari" class="form-control" name="cari" placeholder="Cari meja ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk meja</th>
			<th>Harga meja</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($meja as $r)
		<tr>
			<td>{{ $r->merkmeja }}</td>
			<td>{{ $r->hargameja }}</td>
			<td>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" disabled id="tersedia{{ $r->id }}" {{ $r->tersedia == 1 ? 'checked' : '' }}>
                    <label class="form-check-label text-{{ $r->tersedia == 1 ? 'success' : 'danger' }}" for="tersedia{{ $r->id }}">
                        {{ $r->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                    </label>
                </div>
            </td>
			<td>{{ $r->berat }}</td>
			<td>
				<a href="/meja/edit/{{ $r->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/meja/hapus/{{ $r->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $meja->links() }}
@endsection
