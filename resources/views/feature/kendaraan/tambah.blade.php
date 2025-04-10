@extends("layouts.sbadmin.index")
@section("title", "Tambah Kendaraan")

@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('kendaraan.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>No Plat</label>
            <input type="text" name="no_plat" class="form-control @error('no_plat') is-invalid @enderror" value="{{ old('no_plat') }}">
            @error('no_plat') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror" value="{{ old('nama_pemilik') }}">
            @error('nama_pemilik') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old('merk') }}">
            @error('merk') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Type</label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">
            @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Jenis</label>
            <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ old('jenis') }}">
            @error('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Tahun Pembuatan</label>
            <input type="number" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror" value="{{ old('tahun_pembuatan') }}">
            @error('tahun_pembuatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>CC</label>
            <input type="text" name="cc" class="form-control @error('cc') is-invalid @enderror" value="{{ old('cc') }}">
            @error('cc') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>No Rangka</label>
            <input type="text" name="no_rangka" class="form-control @error('no_rangka') is-invalid @enderror" value="{{ old('no_rangka') }}">
            @error('no_rangka') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>No Mesin</label>
            <input type="text" name="no_mesin" class="form-control @error('no_mesin') is-invalid @enderror" value="{{ old('no_mesin') }}">
            @error('no_mesin') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror" value="{{ old('warna') }}">
            @error('warna') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Bahan Bakar</label>
            <input type="text" name="bahan_bakar" class="form-control @error('bahan_bakar') is-invalid @enderror" value="{{ old('bahan_bakar') }}">
            @error('bahan_bakar') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Tahun Registrasi</label>
            <input type="number" name="tahun_registrasi" class="form-control @error('tahun_registrasi') is-invalid @enderror" value="{{ old('tahun_registrasi') }}">
            @error('tahun_registrasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>No BPKB</label>
            <input type="text" name="no_bpkb" class="form-control @error('no_bpkb') is-invalid @enderror" value="{{ old('no_bpkb') }}">
            @error('no_bpkb') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Tanggal Berlaku STNK</label>
            <input type="date" name="berlaku_stnk_tanggal" class="form-control @error('berlaku_stnk_tanggal') is-invalid @enderror" value="{{ old('berlaku_stnk_tanggal') }}">
            @error('berlaku_stnk_tanggal') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>No Plat Dinas</label>
            <input type="text" name="no_plat_dinas" class="form-control @error('no_plat_dinas') is-invalid @enderror" value="{{ old('no_plat_dinas') }}">
            @error('no_plat_dinas') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Masa Berlaku Plat Dinas</label>
            <input type="date" name="masa_berlaku_plat_dinas" class="form-control @error('masa_berlaku_plat_dinas') is-invalid @enderror" value="{{ old('masa_berlaku_plat_dinas') }}">
            @error('masa_berlaku_plat_dinas') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-12 mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
            @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary col-md-12">Simpan</button>
</form>

@endsection