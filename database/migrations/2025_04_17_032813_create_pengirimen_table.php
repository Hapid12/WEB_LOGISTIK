<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_Pengiriman', function (Blueprint $table) {
            $table->id();
            $table->integer('noresi');
            $table->string('penerima');
            $table->string('tujuan');
            $table->string('layanan');
            $table->integer('berat');
            $table->float('total_harga')->nullable();
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
        Schema::dropIfExists('data_Pengiriman');
    }
};
