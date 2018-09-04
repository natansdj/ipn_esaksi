<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWilayahsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->string('nama_wilayah');
            $table->integer('tingkat_wilayah')->nullable();
            $table->integer('id_pro')->nullable();
            $table->integer('id_kab')->nullable();
            $table->integer('id_kec')->nullable();
            $table->integer('id_kel')->nullable();
            $table->string('nama_pro')->nullable();
            $table->string('nama_kab')->nullable();
            $table->string('nama_kec')->nullable();
            $table->string('nama_kel')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('tingkat_pemilihan')->nullable();
            $table->string('nomorsurat')->nullable();
            $table->string('tanggalsurat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('centroid_x')->nullable();
            $table->string('centroid_y')->nullable();
            $table->integer('depth_level')->nullable();
            $table->integer('urutan_lampiran')->nullable();
            $table->integer('jumlah_penduduk')->nullable();
            $table->integer('alokasi_kursi')->nullable();
            $table->integer('bppd')->nullable();
            $table->integer('jml_versi')->nullable();
            $table->integer('dapil')->nullable();
            $table->string('peta')->nullable();
	        $table->softDeletes();
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
        Schema::drop('wilayahs');
    }
}
