<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilegsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pilegs', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('dapil_id')->nullable();
			$table->string('name');
			$table->string('name2')->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->string('partai')->nullable();
			$table->string('type')->nullable();
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
		Schema::dropIfExists('pilegs');
	}
}
