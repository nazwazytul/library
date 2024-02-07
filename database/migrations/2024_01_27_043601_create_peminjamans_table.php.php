<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->integer('id_buku');
            $table->integer('id_siswa');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('telat');
            $table->string('denda');
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
        //
    }
};
