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

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "no_plat" => "required|string|max:20",
            "nama_pemilik" => "required|string|max:100",
            "alamat" => "required|string|max:255",
            "merk" => "required|string|max:100",
            "type" => "nullable|string|max:100",
            "jenis" => "nullable|string|max:50",
            "tahun_pembuatan" => "nullable|integer|min:1900|max:" . date('Y'),
            "cc" => "nullable|integer|min:1",
            "no_rangka" => "nullable|string|max:100",
            "no_mesin" => "nullable|string|max:100",
            "warna" => "nullable|string|max:50",
            "bahan_bakar" => "nullable|string|max:50",
            "tahun_registrasi" => "nullable|integer|min:1900|max:" . date('Y'),
            "no_bpkb" => "nullable|string|max:100",
            "berlaku_stnk" => "nullable|string|max:100",
            "berlaku_stnk_tanggal" => "nullable|date",
            "no_plat_dinas" => "nullable|string|max:50",
            "masa_berlaku_plat_dinas" => "nullable|date",
        ]);

        $kendaraan = KendaraanModel::findOrFail($id);
        $kendaraan->update($validated);

        if($kendaraan){
            Alert::success("Berhasil!", "Data kendaraan berhasil diupdate!");
            return redirect()->route('kendaraan.index');
        }
    }


}
