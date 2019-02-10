<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wards extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	//phường xã
	public function up() {
		Schema::create('wards', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('district_id')->unsigned();
			$table->foreign('district_id')->references('id')->on('districts');
			$table->string('name', 60);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('wards');
	}
}
