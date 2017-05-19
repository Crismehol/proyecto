<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	public function up()
	{
		Schema::create('tickets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('employee_id')->unsigned();
			$table->integer('customer_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tickets');
	}
}