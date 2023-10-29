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
        Schema::create('sub_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_triwulan',100)->nullable();
            $table->string('nama_target',100)->nullable();
            $table->string('kode_k',100);
            $table->string('urusan' ,100);
            $table->string('indikator' ,100);
            $table->integer('target_k')->nullable();
            $table->integer('target_r')->nullable();
            $table->timestamps();
        // Menambahkan kunci asing 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kegiatan');
    }
};