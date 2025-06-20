@extends('template')

@section('content')
	<h3>Edit meja</h3>

	<a href="/meja" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $r)
	<form action="/meja/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $r->meja_id }}"> <br/>
        <div class="row">
            <div class="col-3">
                Merk meja
            </div>
            <div class="col-8">
                <input type="text" name="merkmeja" required="required" class="form-control" value="{{ $r->meja_merkmeja }}"">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Harga meja
            </div>
            <div class="col-8">
                <input type="number" name="hargameja" required="required" class="form-control" value="{{ $r->meja_hargameja }}"">
            </div>
        </div>
        <br/>

        <div class="form-group row">
            <label class="col-3 col-form-label" for="tersedia">Tersedia</label>
            <div class="col-9">
                <input type="hidden" name="tersedia" value="0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tersedia" name="tersedia" value="1"
                        {{ $r->meja_tersedia == 1 ? 'checked' : '' }}>
                    <label class="custom-control-label" for="tersedia">Centang jika tersedia</label>
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" step="any" id="float-input" name="berat" required="required" class="form-control" value="{{ $r->meja_berat }}">
            </div>
        </div>
        <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
