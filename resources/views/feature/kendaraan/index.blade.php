@extends('layouts.sbadmin.index')
@section('title', 'Data Kendaraan')

@section('content')

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>

        <table id="kendaraanTable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Plat</th>
                    <th>Nama Pemilik</th>
                    <th>Merk</th>
                    <th>Type</th>
                    <th>Jenis</th>
                    <th>Tahun</th>
                    <th>STNK</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->no_plat }}</td>
                        <td>{{ $item->nama_pemilik }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->tahun_pembuatan }}</td>
                        <td>{{ $item->berlaku_stnk_tanggal }}</td>
                        <td>
                            <a href="{{ route('kendaraan.service', $item->id) }}" class="btn btn-sm btn-success">Service</a>
                            <a href="{{ route('kendaraan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<!-- Include jQuery & DataTables -->
<script>
    $(document).ready(function(){
        $('#kendaraanTable').DataTable();
    });
</script>
@endsection
