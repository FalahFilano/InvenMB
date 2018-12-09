<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('no_surat', 5)->nullable();
            $table->string('nama_kegiatan');
            $table->date('tgl_kegiatan');
            $table->string('waktu_kegiatan', 10);
            $table->string('tempat_kegiatan');
            $table->string('departemen');
            $table->string('nama_ketua');
            $table->string('nrp_ketua');
            $table->text('keterangan');
            $table->dateTime('tgl_acc')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('peminjamen');
    }
}
