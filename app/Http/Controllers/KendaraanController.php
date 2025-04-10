<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KendaraanModel;
use RealRashid\SweetAlert\Facades\Alert;

// use App\Model\KendaraanModel;

class KendaraanController extends Controller
{
    //
    public function index(){
        $data = KendaraanModel::all();
        return view("feature.kendaraan.index", compact("data"));
    }
    
    public function tambah(){
        return view("feature.kendaraan.tambah");
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            "no_plat" => "required|string|max:20",
            "nama_pemilik" => "required|string",
            "alamat" => "required|string",
            "merk" => "required|string",
            "type" => "nullable|string",
            "jenis" => "nullable|string",
            "tahun_pembuatan" => "nullable|integer",
            "cc" => "nullable|integer",
            "no_rangka" => "nullable|string",
            "no_mesin" => "nullable|string",
            "warna" => "nullable|string",
            "bahan_bakar" => "nullable|string",
            "tahun_registrasi" => "nullable|integer",
            "no_bpkb" => "nullable|string",
            "berlaku_stnk" => "nullable|string",
            "berlaku_stnk_tanggal" => "nullable|date",
            "no_plat_dinas" => "nullable|string",
            "masa_berlaku_plat_dinas" => "nullable|date",
        ]);

        $store = KendaraanModel::create($validated);

        if($store){
            Alert::success("Berhasil!", "Berhasil tambah kendaraan!");
            return redirect()->back()->with('success', 'Data kendaraan berhasil ditambahkan!');
        }
    }

    public function edit($id)
    {
        $kendaraan = KendaraanModel::findOrFail($id);
        return view('feature.kendaraan.edit', compact('kendaraan'));
    }

}
