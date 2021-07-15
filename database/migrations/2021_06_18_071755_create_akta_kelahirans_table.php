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
            $table->bigInteger('NIK')->unique()->nullable();
            $table->bigInteger('nik_pemohon');
            $table->string('nama_lengkap', 100);
            $table->string('jenis_kelamin', 1);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->string('waktu_lahir', 6);
            $table->string('tempat_dilahirkan', 27);
            $table->string('jenis_kelahiran', 8);
            $table->string('kelahiran_ke', 2);
            $table->string('penolong_kelahiran', 14);
            $table->tinyInteger('berat');
            $table->tinyInteger('tinggi');
            $table->bigInteger('no_KK');
            $table->string('nama_kepala_keluarga', 100);
            $table->bigInteger('noHP');
            $table->string('file_administrasi');
            $table->string('status', 10);
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
