@extends("layouts.sbadmin.index")
@section("title", "Tambah Kendaraan")

@section("content")
<form action="{{ route('aksi.tambah.kendaraan') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>No Plat</label>
            <input type="text" name="no_plat" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Nama Pemilik</label>
            <input type="text" name="nama_pemilik" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Type</label>
            <input type="text" name="type" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Jenis</label>
            <input type="text" name="jenis" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Tahun Pembuatan</label>
            <input type="text" name="tahun_pembuatan" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>CC</label>
            <input type="text" name="cc" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>No Rangka</label>
            <input type="text" name="no_rangka" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>No Mesin</label>
            <input type="text" name="no_mesin" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Bahan Bakar</label>
            <input type="text" name="bahan_bakar" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Tahun Registrasi</label>
            <input type="text" name="tahun_registrasi" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>No BPKB</label>
            <input type="text" name="no_bpkb" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Berlaku STNK</label>
            <input type="text" name="berlaku_stnk" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Berlaku STNK Tanggal</label>
            <input type="date" name="berlaku_stnk_tanggal" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>No Plat Dinas</label>
            <input type="text" name="no_plat_dinas" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label>Masa Berlaku Plat Dinas</label>
            <input type="text" name="masa_berlaku_plat_dinas" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection