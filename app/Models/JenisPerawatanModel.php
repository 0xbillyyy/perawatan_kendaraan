<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPerawatanModel extends Model
{
    //
    protected $table = "jenis_perawatan";
    protected $fillable = [
        "id",
        "jenis_perawatan"
    ];

}
