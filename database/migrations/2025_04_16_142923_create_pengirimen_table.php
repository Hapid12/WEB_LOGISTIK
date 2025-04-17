<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('data_Pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('noresi')->unique();
            $table->string('nama_penerima');
            $table->text('alamat_penerima');
            $table->decimal('berat', 8, 2); // dalam kg, 2 digit desimal
            $table->enum('tujuan', ['dalam_kota', 'luar_kota']);
            $table->enum('layanan', ['reguler', 'kilat']);
            $table->decimal('total_harga', 12, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_Pengiriman');
    }
};
