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
			$table->integer('dapil_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('geo_location')->nullable();
			$table->string('type')->nullable();
			$table->integer('total_vote')->nullable();
			$table->integer('valid_vote')->nullable();
			$table->integer('invalid_vote')->nullable();
			$table->text('note')->nullable();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('kodepos_id')->references('id')->on('kodepos')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('dapil_id')->references('id')->on('dapil')->onUpdate('CASCADE')->onDelete('NO ACTION');
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
