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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->text("no_plat")->nullable();
            $table->text("nama_pemilik")->nullable();
            $table->text("alamat")->nullable();
            $table->text("merk")->nullable();
            $table->text("type")->nullable();
            $table->text("jenis")->nullable();
            $table->text("tahun_pembuatan")->nullable();
            $table->text("cc")->nullable();
            $table->text("no_rangka")->nullable();
            $table->text("no_mesin")->nullable();
            $table->text("warna")->nullable();
            $table->text("bahan_bakar")->nullable();
            $table->text("tahun_registrasi")->nullable();
            $table->text("no_bpkb")->nullable();
            $table->text("berlaku_stnk")->nullable();
            
            $table->date("berlaku_stnk_tanggal")->nullable();


            $table->text("no_plat_dinas")->nullable();
            $table->text("masa_berlaku_plat_dinas")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
