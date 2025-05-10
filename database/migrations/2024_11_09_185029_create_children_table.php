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
        Schema::create('children', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('orphanage_id')->constrained('orphanages')->onDelete('cascade');
            $table->string('photo')->nullable();
            $table->string('nama');
            $table->string('tempat_tgl_lahir');
            $table->string('umur');
            $table->string('jenis_kelamin')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('kelas')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
