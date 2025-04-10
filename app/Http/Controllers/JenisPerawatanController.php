<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPerawatanModel;
use RealRashid\SweetAlert\Facades\Alert;


class JenisPerawatanController extends Controller
{
    //

    public function tambah(){
        return view("feature.jenis_perawatan.tambah");
    }

    public function aksi_tambah(Request $request)
    {
        $request->validate([
            'jenis_perawatan' => 'required|string|max:255'
        ]);

        // Simpan data
        $store = JenisPerawatanModel::create([
            'jenis_perawatan' => $request->jenis_perawatan,
        ]);

        // Redirect dengan pesan
        // if($store){
            Alert::success("Berhasil!", "Data berhasil ditambahkan!");
            return redirect()->back()->with('success', 'Jenis perawatan berhasil ditambahkan!');
        // }

    }
}
