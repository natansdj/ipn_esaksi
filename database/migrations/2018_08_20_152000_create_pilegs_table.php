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
			$table->char('province_id', 2)->nullable();
			$table->integer('silon_id')->nullable();
			$table->integer('dapil_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('gelar_depan')->nullable();
			$table->string('gelar_belakang')->nullable();
			$table->tinyInteger('jenis_kelamin')->nullable();
			$table->integer('no_urut')->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->string('partai')->nullable();
			$table->string('type')->nullable();
			$table->text('note')->nullable();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('CASCADE')->onDelete('NO ACTION');
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
