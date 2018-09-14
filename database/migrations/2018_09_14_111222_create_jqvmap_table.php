<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJqvmapTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jqvmap', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('wilayah_id')->unsigned();
			$table->string('path');
			$table->string('name')->nullable();

			$table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('jqvmap');
	}
}
