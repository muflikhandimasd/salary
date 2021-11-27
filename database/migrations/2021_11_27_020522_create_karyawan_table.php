<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            // supaya ga ada nolnya, jadi dimulai dari 1
            $table->integer('id_jabatan')->unsigned();
            $table->string('nama_karyawan');
            // enum pilihan ganda
            $table->enum('status', ['tetap', 'kontrak', 'magang']);
            $table->date('tanggal_masuk');
            $table->string('nomor_hp')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('cascade'); //cascade: ketika 1 dihapus, yang lain ga kehapus
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
        Schema::dropIfExists('karyawan');
    }
}
