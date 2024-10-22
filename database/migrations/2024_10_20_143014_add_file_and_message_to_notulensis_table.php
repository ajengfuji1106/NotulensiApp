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
        Schema::table('notulensis', function (Blueprint $table) {
            $table->string('file_path')->nullable();  // Menyimpan path file
            $table->text('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notulensis', function (Blueprint $table) {
            $table->dropColumn('file_path');
            $table->dropColumn('message');
        });
    }
};
