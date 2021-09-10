<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTIKOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_i_k_organisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('akte');
            $table->string('status');
            $table->date('berdiri');
            $table->string('alamat');
            $table->string('phone')->nullable();
            $table->string('web')->nullable();
            $table->string('nama_pengurus')->nullable();
            $table->string('kedudukan_pengurus')->nullable();
            $table->string('periode_pengurus')->nullable();
            $table->string('alamat_pengurus')->nullable();
            $table->string('hp_pengurus')->nullable();
            $table->string('kegiatan_kedalam')->nullable();
            $table->string('kegiatan_keluar')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('t_i_k_organisasis');
    }
}
