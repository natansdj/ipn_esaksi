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
			$table->integer('tps_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->date('vote_date')->nullable();
			$table->text('note')->nullable();
			$table->bigInteger('count')->nullable();
			$table->integer('voteable_id')->nullable();
			$table->string('voteable_type')->nullable();
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
		Schema::dropIfExists('votes');
	}
}
