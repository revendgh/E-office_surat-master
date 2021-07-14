<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSuratPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_surat')->unsigned();
            $table->foreign('id_surat')
                  ->references('id')
                  ->on('surat');
            $table->text('tujuan_surat');
            $table->string('tanggal_peminjaman');
            $table->string('waktu_peminjaman');
            $table->string('tujuan');
            $table->string('objek');
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
        Schema::dropIfExists('surat_peminjaman');
    }
}
