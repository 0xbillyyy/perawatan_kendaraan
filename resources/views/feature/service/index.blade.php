@extends("layouts.sbadmin.index")
@section("title", "Service Kendaraan")

@section("content")
<div class="card">
    <div class="card-body">
        <h1>Daftar Perawatan</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('service.create') }}" class="btn btn-success mb-3">+ Tambah Data</a>

        <table class="table table-bordered table-striped table-hover" id="table-service">
            <thead>
                <tr>
                    <th width="150px">Jenis Perawatan</th>
                    <th width="150px">Sparepart</th>
                    <th>Deskripsi</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $item)
                <tr>
                    <!-- <td>{{ $item->jenis_perawatan }}</td> -->
                    <td>{{ $item->jenis->jenis_perawatan ?? '-' }}</td>

                    <td>{{ $item->sparepart }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('service.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('service.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
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
        $('#table-service').DataTable();
    });
</script>
@endsection