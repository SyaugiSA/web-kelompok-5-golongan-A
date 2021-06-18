<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuTandaPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_tanda_penduduks', function (Blueprint $table) {
            $table->bigIncrements("No_Reg");
            $table->bigInteger('NIK')->unique();
            $table->string('Nama_Lengkap', 100);
            $table->string('foto_diri');
            $table->bigInteger('no_KK');
            $table->string('surat keterangan');
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
        Schema::dropIfExists('kartu_tanda_penduduks');
    }
}