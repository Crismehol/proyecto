<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->string('surname', 100);
			$table->string('dni', 9);
			$table->string('email', 50);
			$table->boolean('job', 1);
			$table->string('user', 100);
			$table->string('password', 65);
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}