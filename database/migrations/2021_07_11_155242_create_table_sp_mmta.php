<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSpMmta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sp_mmta', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_surat')->unsigned();
            $table->foreign('id_surat')
                  ->references('id')
                  ->on('surat');
            $table->string('periode_proposal');
            $table->string('judul');
            $table->string('pembimbing_1');
            $table->string('nip_1');
            $table->string('pembimbing_2');
            $table->string('nip_2');
            $table->string('tanggal_ujian');
            $table->string('nilai_proposal');
            $table->text('isi_perjanjian')->nullable();
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
        Schema::dropIfExists('sp_mmta');
    }
}
