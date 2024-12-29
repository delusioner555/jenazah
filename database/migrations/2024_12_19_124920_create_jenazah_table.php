<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenazahTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jenazah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenazah');
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->foreignId('lokasi_dikubur')->constrained('kuburan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenazah');
    }
}
