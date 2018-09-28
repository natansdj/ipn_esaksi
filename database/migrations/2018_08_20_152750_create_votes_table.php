<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('tps_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->date('vote_date')->nullable();
			$table->text('note')->nullable();
			$table->bigInteger('count')->nullable();
			$table->integer('voteable_id')->unsigned()->nullable();
			$table->string('voteable_type')->nullable();
			$table->string('type')->nullable();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('tps_id')->references('id')->on('tps')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->unique(['user_id', 'voteable_id', 'voteable_type']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('votes');
	}
}
