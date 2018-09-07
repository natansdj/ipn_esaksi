<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTingkatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkatan', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('wilayah_id')->unsigned()->index();
	        $table->integer('tingkat_wilayah')->nullable();
	        $table->integer('urutan_lampiran')->nullable();
	        $table->integer('jumlah_penduduk')->nullable();
	        $table->integer('alokasi_kursi')->nullable();
	        $table->integer('bppd')->nullable();
	        $table->integer('jml_versi')->nullable();
	        $table->string('peta')->nullable();
            $table->softDeletes();
            $table->timestamps();

	        $table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tingkatan');
    }
}
