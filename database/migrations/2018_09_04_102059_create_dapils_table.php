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
			$table->unsignedInteger('id', false)->primary();
			$table->string('nama');
			$table->integer('parent')->nullable();
			$table->integer('tingkat')->nullable();
			$table->integer('jumlah_penduduk')->nullable();
			$table->integer('alokasi_kursi')->nullable();
			$table->integer('alokasi_sisa_kursi')->nullable();
			$table->integer('id_wilayah')->unsigned()->nullable();
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
