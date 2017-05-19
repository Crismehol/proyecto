<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->text('description');
			$table->decimal('price_without_vat');
			$table->decimal('vat', 4,2);
			$table->string('type', 15);
			$table->integer('provider_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}