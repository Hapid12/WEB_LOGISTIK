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
        Schema::create('data_Pengirim', function (Blueprint $table) {
            $table->id();
            $table->integer('kodePengiriman')->require;
            $table->string('namaPengirim')->require;
            $table->string('jenisBarang')->require;
            $table->string('status')->nullable(false);
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
        Schema::dropIfExists('data_Pengirim');
    }
};
