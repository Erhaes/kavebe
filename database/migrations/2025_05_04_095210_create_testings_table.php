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
        Schema::create('testings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_testing');
            $table->string('slug');
            $table->text('keterangan')->nullable();
            $table->string('satuan')->nullable();
            $table->integer('harga');
            $table->text('catatan')->nullable();
            $table->string('sampel')->nullable();
            $table->text('gambar')->nullable();
            $table->foreignId('facilities_id')->constrained();
            $table->foreignId('equipment_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testings');
    }
};
