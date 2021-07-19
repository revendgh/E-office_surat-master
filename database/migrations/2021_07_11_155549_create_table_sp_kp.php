<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSpKp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sp_kp', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_surat')->unsigned();
            $table->foreign('id_surat')
                  ->references('id')
                  ->on('surat');
            $table->text('tujuan');
            $table->string('tempat_kp');
            $table->string('surat_balasan');
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->text('mahasiswa');
            $table->string('waktu_kp');
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
        Schema::dropIfExists('sp_kp');
    }
}
