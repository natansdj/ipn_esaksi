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
			$table->char('province_id', 2)->index()->nullable()->comment('PROVINSI');
			$table->char('regency_id', 4)->index('districts_id_index')->nullable()->comment('KOTA/KABUPATEN');
			$table->char('district_id', 7)->index()->nullable()->comment('KECAMATAN');
			$table->char('village_id', 10)->index()->nullable()->comment('KELURAHAN');
			$table->integer('tps_id')->unsigned()->nullable();
			$table->boolean('is_active')->default(true);
			$table->boolean('is_admin')->default(false);
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('regency_id')->references('id')->on('regencies')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('district_id')->references('id')->on('districts')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('village_id')->references('id')->on('villages')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('tps_id')->references('id')->on('tps')->onUpdate('CASCADE')->onDelete('NO ACTION');
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
