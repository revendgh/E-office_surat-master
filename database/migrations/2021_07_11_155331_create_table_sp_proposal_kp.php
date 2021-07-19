<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSpProposalKp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sp_proposal_kp', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_surat')->unsigned();
            $table->foreign('id_surat')
                  ->references('id')
                  ->on('surat');
            $table->text('tujuan_surat');
            $table->string('tempat_kp');
            $table->text('mahasiswa');
            $table->string('lama_waktu');
            $table->string('jangka_waktu');
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
        Schema::dropIfExists('sp_proposal_kp');
    }
}
