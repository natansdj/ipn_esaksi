<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKodeposTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kodepos', function (Blueprint $table) {
			$table->increments('id');
			$table->char('province_id', 2);
			$table->string('kabupaten');
			$table->string('kecamatan');
			$table->string('kelurahan');
			$table->string('kodepos', 10);

			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kodepos');
	}

}
