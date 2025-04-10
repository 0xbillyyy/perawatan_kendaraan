<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KendaraanModel extends Model
{
    //
    protected $table = "kendaraan";
    protected $fillable = [
        "no_plat",
        "nama_pemilik",
        "alamat",
        "merk",
        "type",
        "jenis",
        "tahun_pembuatan",
        "cc",
        "no_rangka",
        "no_mesin",
        "warna",
        "bahan_bakar",
        "tahun_registrasi",
        "no_bpkb",
        "berlaku_stnk",
        "berlaku_stnk_tanggal",
        "no_plat_dinas",
        "masa_berlaku_plat_dinas",

    ];
}
