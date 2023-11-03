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
        Schema::create('terget', function (Blueprint $table) {
            $table->id('id_target');
            $table->unsignedBigInteger('sub_id');
            $table->unsignedBigInteger('bidang_id');
            $table->string('name', 100)->nullable();
            $table->integer('target_k')->nullable();
            $table->integer('target_rp')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terget');
    }
};
