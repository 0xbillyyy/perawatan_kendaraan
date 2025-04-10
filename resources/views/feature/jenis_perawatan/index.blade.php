@extends("layouts.sbadmin.index")
@section("title", "Tambah Jenis Perawatan")

@section("content")

<div class="card">
    <div class="card-body">
        <h4>Data Jenis Perawatan</h4>
        <table id="jenisTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="50px">No</th>
                    <th>Jenis Perawatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->jenis_perawatan }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('form-hapus-{{ $item->id }}').submit();">
                                Hapus
                            </a>

                            <form id="form-hapus-{{ $item->id }}" action="{{ route('jenis_perawatan.destroy', $item->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- CDN DataTables -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
 -->

<script>
    $(document).ready(function(){
        $('#jenisTable').DataTable();
    });
</script>

@endsection