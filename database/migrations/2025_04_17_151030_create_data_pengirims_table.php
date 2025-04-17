<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataPengirim', function (Blueprint $table) {
            $table->id();
            $table->integer('noresi')->require;
            $table->string('namaBarang')->require;
            $table->string('jenisBarang')->require;
            $table->string('status')->nullable();
            $table->string('alamatAwal')->require;
            $table->string('alamatAkhir')->require;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataPengirim');
    }
};
