<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->timestamps();
			$table->string('name', 50);
			$table->string('surname', 100);
			$table->string('dni', 9);
			$table->string('email', 50);
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}