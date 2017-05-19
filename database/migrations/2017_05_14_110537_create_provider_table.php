<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderTable extends Migration {

	public function up()
	{
		Schema::create('provider', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->string('number_phone', 9);
			$table->string('email', 100);
			$table->string('address', 50);
		});
	}

	public function down()
	{
		Schema::drop('provider');
	}
}