<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDapilPilegPivotTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dapil_pileg', function (Blueprint $table) {
			$table->integer('dapil_id')->unsigned()->index();
			$table->integer('pileg_id')->unsigned()->index();
			$table->primary(['dapil_id', 'pileg_id']);
			
			$table->foreign('dapil_id')->references('id')->on('dapil')->onDelete('cascade');
			$table->foreign('pileg_id')->references('id')->on('pilegs')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('dapil_pileg');
	}
}
