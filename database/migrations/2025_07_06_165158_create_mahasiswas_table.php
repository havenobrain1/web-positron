<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('prodi'); // misalnya "Teknik Elektro"
            $table->string('kelompok'); // misalnya "Kelompok A"
            $table->string('mentor'); // nama PJ kelompok
            $table->timestamps();
        });
    }


};
