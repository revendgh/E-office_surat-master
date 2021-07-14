<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSuratKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_tata_naskah', 191)->nullable();
            $table->string('jenis_tata_naskah', 191);
            $table->string('keperluan_tata_naskah', 191);
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users')
                  ->references('id')
                  ->on('users');
            $table->string('pejabat_penandatangan', 191);
            $table->string('tata_naskah_file', 191)->nullable();
            $table->string('tata_naskah_ck', 191)->nullable();
            $table->tinyInteger('status_tata_naskah');
            $table->string('keterangan_tata_naskah', 191)->nullable();
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
        Schema::dropIfExists('surat_keluar');
    }
}
