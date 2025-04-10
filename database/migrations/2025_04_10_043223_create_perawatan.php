<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perawatan', function (Blueprint $table) {
            $table->id();
            $table->text("id_mobil");
            $table->text("jenis_perawatan")->nullable();
            $table->date("tanggal_perwatan")->nullable();
            $table->date("tanggal_perawatan_berikutnya")->nullable();
            $table->text("jumlah_km")->nullable();
            $table->text("sparepart")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatan');
    }
};
