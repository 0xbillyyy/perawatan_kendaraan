@extends("layouts.sbadmin.index")
@section("title", "Tambah Kendaraan")

@section("content")
<div class="card">
    <div class="card-body">
        <h2>Edit Kendaraan</h2>

        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>No. Plat</label>
                <input type="text" name="no_plat" value="{{ old('no_plat', $kendaraan->no_plat) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ old('alamat', $kendaraan->alamat) }}</textarea>
            </div>

            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" value="{{ old('merk', $kendaraan->merk) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" value="{{ old('type', $kendaraan->type) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" value="{{ old('jenis', $kendaraan->jenis) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Tahun Pembuatan</label>
                <input type="number" name="tahun_pembuatan" value="{{ old('tahun_pembuatan', $kendaraan->tahun_pembuatan) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>CC</label>
                <input type="number" name="cc" value="{{ old('cc', $kendaraan->cc) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>No Rangka</label>
                <input type="text" name="no_rangka" value="{{ old('no_rangka', $kendaraan->no_rangka) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>No Mesin</label>
                <input type="text" name="no_mesin" value="{{ old('no_mesin', $kendaraan->no_mesin) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Warna</label>
                <input type="text" name="warna" value="{{ old('warna', $kendaraan->warna) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Bahan Bakar</label>
                <input type="text" name="bahan_bakar" value="{{ old('bahan_bakar', $kendaraan->bahan_bakar) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Tahun Registrasi</label>
                <input type="number" name="tahun_registrasi" value="{{ old('tahun_registrasi', $kendaraan->tahun_registrasi) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>No BPKB</label>
                <input type="text" name="no_bpkb" value="{{ old('no_bpkb', $kendaraan->no_bpkb) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Berlaku STNK</label>
                <input type="text" name="berlaku_stnk" value="{{ old('berlaku_stnk', $kendaraan->berlaku_stnk) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Berlaku STNK Tanggal</label>
                <input type="date" name="berlaku_stnk_tanggal" value="{{ old('berlaku_stnk_tanggal', $kendaraan->berlaku_stnk_tanggal) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>No Plat Dinas</label>
                <input type="text" name="no_plat_dinas" value="{{ old('no_plat_dinas', $kendaraan->no_plat_dinas) }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Masa Berlaku Plat Dinas</label>
                <input type="date" name="masa_berlaku_plat_dinas" value="{{ old('masa_berlaku_plat_dinas', $kendaraan->masa_berlaku_plat_dinas) }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>
@endsection
