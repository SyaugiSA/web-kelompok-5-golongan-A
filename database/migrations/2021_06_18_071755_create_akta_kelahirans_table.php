<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktaKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akta_kelahirans', function (Blueprint $table) {
            $table->bigIncrements('No_Reg');
            $table->bigInteger('NIK')->unique();
            $table->string('nama_lengkap', 100);
            $table->boolean('jenis_kelamin');
            $table->string('tempat_lahir', 30);
            $table->dateTime('tanggal_waktu_lahir');
            $table->string('tempat_dilahirkan', 27);
            $table->string('jenis_kelahiran', 8);
            $table->tinyInteger('kelahiran_ke');
            $table->string('penolong_kelahiran', 14);
            $table->tinyInteger('berat');
            $table->tinyInteger('tinggi');
            $table->bigInteger('no_KK');
            $table->string('nama_kepala_keluarga', 100);
            $table->bigInteger('noHP');
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
        Schema::dropIfExists('akta_kelahirans');
    }
}