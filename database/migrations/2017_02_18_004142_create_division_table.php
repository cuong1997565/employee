<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('divisions', function (Blueprint $table) {
			$table->increments('id', true);
			$table->string('name', 60);
			$table->integer('department_id')->unsigned();
			$table->foreign('department_id')->references('id')->on('departments');
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
		Schema::dropIfExists('divisions');
	}
}
