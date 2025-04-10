@extends("layouts.sbadmin.index")
@section("title", "Tambah Jenis Perawatan")

@section("content")
<form action="{{ route('aksi.tambah.jenis_perawatan') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 mb-3">
            <label>Jenis Perawatan</label>
            <input type="text" name="jenis_perawatan" class="form-control @error('jenis_perawatan') is-invalid @enderror" value="{{ old('jenis_perawatan') }}">
            @error('jenis_perawatan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary col-md-12">Simpan</button>
</form>

@endsection