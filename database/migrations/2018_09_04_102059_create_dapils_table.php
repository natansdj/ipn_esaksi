<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDapilsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dapil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('tingkat')->nullable();
            $table->integer('jumlah_penduduk')->nullable();
            $table->integer('wilayah_id')->unsigned()->nullable();
            $table->integer('total_alokasi_kursi')->nullable();
            $table->integer('id_versi')->nullable();
            $table->integer('no_dapil')->nullable();
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
        Schema::dropIfExists('dapil');
    }
}
