<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerawatanModel extends Model
{
    //
    protected $table = "perawatan";
    protected $fillable = [
        "id_mobil",
        "jenis_perawatan",
        "tanggal_perawatan",
        "tanggal_perawatan_berikutnya",
        "jumlah_km",
        "sparepart"
    ];
}
