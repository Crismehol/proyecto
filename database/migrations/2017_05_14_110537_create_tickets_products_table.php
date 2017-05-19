<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsProductsTable extends Migration {

	public function up()
	{
		Schema::create('tickets_products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('ticket_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->decimal('price', 5,2);
			$table->integer('volume');
		});
	}

	public function down()
	{
		Schema::drop('tickets_products');
	}
}