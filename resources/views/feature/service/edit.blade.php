@extends('layouts.sbadmin.index')
@section('title', 'Edit Perawatan')

@section('content')
<div class="card">
    <div class="card-body"> 
        <h1>Edit Data Perawatan</h1>

        <form action="{{ route('service.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

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
                <input type="text" name="sparepart" class="form-control" value="{{ $service->sparepart }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" required>{{ $service->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
