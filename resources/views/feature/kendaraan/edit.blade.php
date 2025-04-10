@extends("layouts.sbadmin.index")
@section("title", "Edit Kendaraan")

@section("content")
<div class="card">
    <div class="card-body">
        <h2>Edit Kendaraan</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>No. Plat</label>
                <input type="text" name="no_plat" class="form-control @error('no_plat') is-invalid @enderror"
                    value="{{ old('no_plat', $kendaraan->no_plat) }}" required>
                @error('no_plat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror"
                    value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}" required>
                @error('nama_pemilik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror"
                    value="{{ old('merk', $kendaraan->merk) }}" required>
                @error('merk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
                    value="{{ old('type', $kendaraan->type) }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"
                    value="{{ old('jenis', $kendaraan->jenis) }}">
                @error('jenis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Tahun Pembuatan</label>
                <input type="number" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror"
                    value="{{ old('tahun_pembuatan', $kendaraan->tahun_pembuatan) }}">
                @error('tahun_pembuatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>CC</label>
                <input type="number" name="cc" class="form-control @error('cc') is-invalid @enderror"
                    value="{{ old('cc', $kendaraan->cc) }}">
                @error('cc')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>No Rangka</label>
                <input type="text" name="no_rangka" class="form-control @error('no_rangka') is-invalid @enderror"
                    value="{{ old('no_rangka', $kendaraan->no_rangka) }}">
                @error('no_rangka')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>No Mesin</label>
                <input type="text" name="no_mesin" class="form-control @error('no_mesin') is-invalid @enderror"
                    value="{{ old('no_mesin', $kendaraan->no_mesin) }}">
                @error('no_mesin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror"
                    value="{{ old('warna', $kendaraan->warna) }}">
                @error('warna')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Bahan Bakar</label>
                <input type="text" name="bahan_bakar" class="form-control @error('bahan_bakar') is-invalid @enderror"
                    value="{{ old('bahan_bakar', $kendaraan->bahan_bakar) }}">
                @error('bahan_bakar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Tahun Registrasi</label>
                <input type="number" name="tahun_registrasi" class="form-control @error('tahun_registrasi') is-invalid @enderror"
                    value="{{ old('tahun_registrasi', $kendaraan->tahun_registrasi) }}">
                @error('tahun_registrasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>No BPKB</label>
                <input type="text" name="no_bpkb" class="form-control @error('no_bpkb') is-invalid @enderror"
                    value="{{ old('no_bpkb', $kendaraan->no_bpkb) }}">
                @error('no_bpkb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Berlaku STNK</label>
                <input type="text" name="berlaku_stnk" class="form-control @error('berlaku_stnk') is-invalid @enderror"
                    value="{{ old('berlaku_stnk', $kendaraan->berlaku_stnk) }}">
                @error('berlaku_stnk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Berlaku STNK Tanggal</label>
                <input type="date" name="berlaku_stnk_tanggal" class="form-control @error('berlaku_stnk_tanggal') is-invalid @enderror"
                    value="{{ old('berlaku_stnk_tanggal', $kendaraan->berlaku_stnk_tanggal) }}">
                @error('berlaku_stnk_tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>No Plat Dinas</label>
                <input type="text" name="no_plat_dinas" class="form-control @error('no_plat_dinas') is-invalid @enderror"
                    value="{{ old('no_plat_dinas', $kendaraan->no_plat_dinas) }}">
                @error('no_plat_dinas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Masa Berlaku Plat Dinas</label>
                <input type="date" name="masa_berlaku_plat_dinas" class="form-control @error('masa_berlaku_plat_dinas') is-invalid @enderror"
                    value="{{ old('masa_berlaku_plat_dinas', $kendaraan->masa_berlaku_plat_dinas) }}">
                @error('masa_berlaku_plat_dinas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="5" required>{{ old('alamat', $kendaraan->alamat) }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>
@endsection
