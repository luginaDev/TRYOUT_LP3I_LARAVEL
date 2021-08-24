<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->bigIncrements('no_transaksi');
            $table->uuid('nim');
            $table->uuid('kode_matakuliah');
            $table->string('semester');
            $table->string('tahun_akademik');
            $table->string('tanggal_krs');
            $table->string('kelas');


            $table->foreign('nim')
            ->references('nim')->on('mahasiswas')
            ->onDelete('cascade');

            $table->foreign('kode_matakuliah')
            ->references('kode_matakuliah')->on('matkuls')
            ->onDelete('cascade');

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
        Schema::dropIfExists('krs');
    }
}
