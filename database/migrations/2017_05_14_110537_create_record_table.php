<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordTable extends Migration {

	public function up()
	{
		Schema::create('record', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('description');
			$table->string('diopters_right', 5);
			$table->string('diopters_left', 5);
			$table->string('astigmatism_right', 5);
			$table->string('astigmatism_left', 5);
			$table->string('axis_right', 5);
			$table->string('axis_left', 5);
			$table->integer('customer_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('historial');
	}
}