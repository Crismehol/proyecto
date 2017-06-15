<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('employees', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('employee_id')->references('id')->on('employees')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('provider_id')->references('id')->on('provider')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('record', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tickets_products', function(Blueprint $table) {
			$table->foreign('ticket_id')->references('id')->on('tickets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tickets_products', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('employees', function(Blueprint $table) {
			$table->dropForeign('employees_user_id_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_employee_id_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_customer_id_foreign');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_provider_id_foreign');
		});
		Schema::table('record', function(Blueprint $table) {
			$table->dropForeign('record_customer_id_foreign');
		});
		Schema::table('tickets_products', function(Blueprint $table) {
			$table->dropForeign('tickets_products_ticket_id_foreign');
		});
		Schema::table('tickets_products', function(Blueprint $table) {
			$table->dropForeign('tickets_products_product_id_foreign');
		});
	}
}