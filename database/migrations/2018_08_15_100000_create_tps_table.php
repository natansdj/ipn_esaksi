<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tps', function (Blueprint $table) {
			$table->increments('id');
			$table->char('province_id', 2)->nullable();
			$table->integer('kodepos_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('geo_location')->nullable();
			$table->string('type')->nullable();
			$table->text('note')->nullable();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('kodepos_id')->references('id')->on('kodepos')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tps');
	}
}
