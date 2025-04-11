<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JenisPerawatanModel;

class ServiceModel extends Model
{
    //
    protected $table = "perawatan";
    protected $fillable = [
        "jenis_perawatan",
        "sparepart",
        "deskripsi"
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisPerawatanModel::class, 'jenis_perawatan');
    }
}
