<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPerawatanModel;
use RealRashid\SweetAlert\Facades\Alert;


class JenisPerawatanController extends Controller
{
    //

    public function index(){
        $data = JenisPerawatanModel::all();
        return view("feature.jenis_perawatan.index", compact("data"));
    }

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

    public function destroy($id)
    {
        $data = JenisPerawatanModel::findOrFail($id);
        $data->delete();

        if($data){
            Alert::success("Berhasil!", "Berhasil hapus jenis perawatan!");
            return redirect()->back()->with('success', 'Jenis perawatan berhasil dihapus.');
        }
    }
}
