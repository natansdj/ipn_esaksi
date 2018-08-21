<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('type')->nullable();
			$table->string('nik')->nullable();
			$table->char('gender')->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->integer('status')->nullable();
			$table->string('phone')->nullable();
			$table->string('occupation')->nullable();
			$table->string('address')->nullable();
			$table->string('province')->nullable();
			$table->string('city')->nullable();
			$table->string('kecamatan')->nullable();
			$table->string('kelurahan')->nullable();
			$table->integer('tps_id')->nullable();
			$table->boolean('is_active')->default(true);
			$table->boolean('is_admin')->default(false);
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}
}
