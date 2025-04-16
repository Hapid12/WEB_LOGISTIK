<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('data_Track', function (Blueprint $table) {
            $table->id();
            $table->string('layanan');
            $table->date('waktuPengiriman'); // Perbaiki tipe data
            $table->date('estimasiTiba'); // Perbaiki tipe data
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_Track');
    }
};
