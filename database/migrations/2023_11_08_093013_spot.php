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
        Schema::create('spot', function (Blueprint $table){
            $table->id('id_spot');
            $table->string('kelurahan');
            $table->string('lokasi');
            $table->string('no_pengajuan')->nullable();

            $table->foreign('no_pengajuan')->references('no_pengajuan')->on('pengajuan')->onDelete('cascade');
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
