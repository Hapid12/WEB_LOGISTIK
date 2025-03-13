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
            $table->integer('noresi');
            $table->timestamp('waktu'); // Perbaiki tipe data
            $table->string('lokasi');
            $table->string('tujuan');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_Track');
    }
};
