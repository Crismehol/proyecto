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
			$table->decimal('diopters_right', 4,2);
			$table->decimal('diopters_left', 4,2);
			$table->decimal('astigmatism_right', 4,2);
			$table->decimal('astigmatism_left', 4,2);
			$table->integer('customer_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('historial');
	}
}