<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('employees', function (Blueprint $table) {
			$table->increments('id', true);
			$table->string('full_name', 60);
			$table->string('address', 120);
			$table->string('phone', 13);
			$table->tinyInteger('gender')->unsigned();
			$table->date('date_of_birth');
			$table->string('qualification'); //trình độ
			$table->date('date_of_joining');
			$table->string('picture', 60);
			$table->string('code');
			$table->string('type'); //TTS - NhanVien

			$table->integer('department_id')->unsigned();
			$table->integer('division_id')->unsigned();

			$table->integer('city_id')->unsigned();
			$table->integer('district_id')->unsigned();
			$table->integer('ward_id')->unsigned();

			$table->foreign('department_id')->references('id')->on('departments');
			$table->foreign('division_id')->references('id')->on('divisions');

			$table->foreign('city_id')->references('id')->on('cities');
			$table->foreign('district_id')->references('id')->on('districts');
			$table->foreign('ward_id')->references('id')->on('wards');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('employees');
	}
}
