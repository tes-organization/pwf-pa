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
        Schema::create('pengajuan', function (Blueprint $table){
            $table->id('no_pengajuan');
            $table->string('pengaju');
            $table->string('kelurahan');
            $table->string('lokasi');
            $table->timestamp('tgl_pengajuan');
            $table->string('status');

            $table->foreign('kelurahan')->references('id_kelurahan')->on('kelurahan')->onDelete('cascade');
            $table->foreign('pengaju')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};