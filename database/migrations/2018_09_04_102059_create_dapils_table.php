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
        Schema::create('dapils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('tingkat')->nullable();
            $table->integer('jumlahPenduduk')->nullable();
            $table->integer('idWilayah')->unsigned()->nullable();
            $table->integer('totalAlokasiKursi')->nullable();
            $table->integer('idVersi')->nullable();
            $table->integer('noDapil')->nullable();
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
        Schema::dropIfExists('dapils');
    }
}
