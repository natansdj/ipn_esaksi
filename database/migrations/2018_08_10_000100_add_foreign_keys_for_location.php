<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysForLocation extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('districts', function (Blueprint $table) {
			$table->foreign('regency_id')->references('id')->on('regencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
		Schema::table('regencies', function (Blueprint $table) {
			$table->foreign('province_id')->references('id')->on('provinces')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
		Schema::table('villages', function (Blueprint $table) {
			$table->foreign('district_id')->references('id')->on('districts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('districts', function (Blueprint $table) {
			$table->dropForeign('districts_regency_id_foreign');
		});
		Schema::table('regencies', function (Blueprint $table) {
			$table->dropForeign('regencies_province_id_foreign');
		});
		Schema::table('villages', function (Blueprint $table) {
			$table->dropForeign('villages_district_id_foreign');
		});
	}

}
