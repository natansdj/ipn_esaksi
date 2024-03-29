<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDapilWilayahPivotTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dapil_wilayah', function (Blueprint $table) {
			$table->integer('dapil_id')->unsigned()->index();
			$table->integer('wilayah_id')->unsigned()->index();
			$table->primary(['dapil_id', 'wilayah_id']);

			$table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('dapil_id')->references('id')->on('dapil')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('dapil_wilayah');
	}
}
