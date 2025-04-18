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
        Schema::create('data_pengirim', function (Blueprint $table) {
            $table->id();
            $table->string('kodePengiriman');
            $table->string('namaPengirim');
            $table->string('jenisBarang');
            $table->string('status');
            $table->string('alamatAwal');
            $table->string('alamatAkhir');
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
        Schema::dropIfExists('data_pegirimen');
    }
};
