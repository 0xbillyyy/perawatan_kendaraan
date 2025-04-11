<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use App\Models\JenisPerawatanModel;
use RealRashid\SweetAlert\Facades\Alert;


class ServiceController extends Controller
{
    //
    public function index()
    {
        // $services = ServiceModel::all();
        $services = ServiceModel::with('jenis')->get();

        return view('feature.service.index', compact('services'));
    }

    public function create()
    {
        $jenisList = JenisPerawatanModel::all();
        return view('feature.service.create', compact("jenisList"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_perawatan' => 'required|string|max:255',
            'sparepart' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $store = ServiceModel::create($request->all());

        if($store){
            Alert::success("Berhasil!", "Berhasil menambahkan data!");
            return redirect()->route('service.index')->with('success', 'Data berhasil disimpan!');
        }
    }

    public function edit($id)
    {
        $service = ServiceModel::findOrFail($id);
        $jenisList = JenisPerawatanModel::all();

        return view('feature.service.edit', compact('service', "jenisList"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_perawatan' => 'required|string|max:255',
            'sparepart' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $service = ServiceModel::findOrFail($id);
        $service->update($request->all());

        if($service){
            Alert::success("Berhasil!", "Berhasil Perbarui Data!");
            return redirect()->route('service.index')->with('success', 'Data berhasil diperbarui!');
        }
    }

    public function destroy($id)
    {
        $service = ServiceModel::findOrFail($id);
        $service->delete();

        if($service){
            Alert::success("Berhasil!", "Berhasil hapus data!");
            return redirect()->route('service.index')->with('success', 'Data berhasil dihapus!');
        }
    }
}
