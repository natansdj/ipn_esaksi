<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilpresTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pilpres', function (Blueprint $table) {
			$table->increments('id');
			$table->string('capres_name');
			$table->date('capres_dob')->nullable();
			$table->string('capres_pob')->nullable();
			$table->string('capres_partai')->nullable();
			$table->string('cawapres_name');
			$table->date('cawapres_dob')->nullable();
			$table->string('cawapres_pob')->nullable();
			$table->string('cawapres_partai')->nullable();
			$table->string('type')->nullable();
			$table->text('note')->nullable();
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
		Schema::dropIfExists('pilpres');
	}
}
