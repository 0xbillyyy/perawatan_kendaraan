<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    //
    public function index(){
        return view("feature.kendaraan.index");
    }
    
    public function tambah(){
        return view("feature.kendaraan.tambah");
    }

}
