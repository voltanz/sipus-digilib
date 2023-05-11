<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('book_id');
            $table->dateTime('tgl_pinjam');
            $table->dateTime('tgl_kembali');
            $table->string('denda')->nullable();
            $table->dateTime('tgl_pengembalian')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->timestamps();


            $table->foreign('transaksi_id')->references('id')->on('transaksi')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('book_id')->references('id')->on('books')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
