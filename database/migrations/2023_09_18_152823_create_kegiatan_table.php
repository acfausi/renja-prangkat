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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_k' ,100);
            $table->string('kode', 100);
            $table->string('urusan' ,100);
            $table->string('indikator' ,100);
            $table->integer('target_k')->nullable();
            $table->integer('target_r')->nullable();
            $table->timestamps();
            //menambahkan kunci asing
            // $table->foreign('program_id')->references('id')->on('program');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
