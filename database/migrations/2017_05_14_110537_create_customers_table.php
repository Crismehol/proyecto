<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->string('surname');
			$table->string('dni', 9);
			$table->string('email');
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}