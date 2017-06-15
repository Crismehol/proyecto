<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	public function run()
	{
//		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		
		$this->call(CustomerTableSeeder::class);
		$this->call(EmployeeTableSeeder::class);
		$this->call(RecordTableSeeder::class);
		$this->call(TicketTableSeeder::class);
		$this->call(UserTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}