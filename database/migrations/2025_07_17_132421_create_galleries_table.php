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
    Schema::create('galleries', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image_path'); // Untuk menyimpan path/lokasi file gambar
        $table->timestamps(); // Otomatis membuat created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
