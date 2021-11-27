<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->increments('id');
            // varchar/string supaya bisa koma koma
            $table->integer('id_karyawan')->unsigned();
            $table->string('id_tunjangan');
            $table->date('tanggal_gajian');
            $table->string('bulan_gajian');
            $table->string('tahun_gajian');
            $table->string('potongan');
            $table->string('total_gajian');
            $table->string('total_tunjangan');
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
        Schema::dropIfExists('penggajian');
    }
}
