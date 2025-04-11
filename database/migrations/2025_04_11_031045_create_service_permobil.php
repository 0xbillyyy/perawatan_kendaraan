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
        Schema::create('service_permobil', function (Blueprint $table) {
            $table->id();
            $table->text("perawatan_id");
            $table->date("tanggal_perwatan")->nullable();
            $table->date("tanggal_perawatan_berikutnya")->nullable();
            $table->text("jumlah_km")->nullable();
            $table->text("deskripsi")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_permobil');
    }
};
