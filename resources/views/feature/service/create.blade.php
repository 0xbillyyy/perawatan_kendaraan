@extends("layouts.sbadmin.index")
@section("title", "Tambah Service Kendaraan")

@section("content")
<div class="card">
    <div class="card-body">
        <h1 class="mb-4">Tambah Data Perawatan</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Ada kesalahan:<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="jenis_perawatan">Jenis Perawatan</label>
                <select name="jenis_perawatan" class="form-control" required>
                    <option value="">-- Pilih Jenis --</option>
                    @foreach ($jenisList as $jenis)
                        <option value="{{ $jenis->id }}">{{ $jenis->jenis_perawatan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="sparepart">Sparepart</label>
                <input type="text" name="sparepart" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection