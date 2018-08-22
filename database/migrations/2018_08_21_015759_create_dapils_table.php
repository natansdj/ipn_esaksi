<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('geo_location')->nullable();
			$table->string('type')->nullable();
			$table->text('note')->nullable();
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
