<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhkabelTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhkabel_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mesin_id');
            $table->string('mesin_nama');
            $table->date('tgl_p');
            $table->integer('shift_pgw');
            $table->bigInteger('total_jam');
            $table->string('jam_kegiatan');
            $table->string('kegiatan');
            $table->string('proses_type');
            $table->integer('so_no');
            $table->integer('po_no');
            $table->string('speed_line');
            $table->integer('rpm');
            $table->integer('target_panjang');
            $table->string('bobin_bahan_id');
            $table->integer('panjang_bahan');
            $table->string('warna_bahan');
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
        Schema::dropIfExists('lhkabel_tabel');
    }
}
