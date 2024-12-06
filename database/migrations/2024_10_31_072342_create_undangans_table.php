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
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('perihal');
            $table->string('lampiran');
            $table->text('kepada');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('tempat');
            $table->json('agenda'); // Menyimpan daftar agenda dalam format JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangans');
    }
};
