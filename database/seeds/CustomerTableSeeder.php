<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();

        Customer::create(array(
            'name' => 'Customer 1',
            'surname' => 'Surname 1',
            'dni' => '12345111L',
            'email' => 'customer1@email.com',
            'phone_number' => '999999991'
        ));
        Customer::create(array(
            'name' => 'Customer 2',
            'surname' => 'Surname 2',
            'dni' => '12345222L',
            'email' => 'customer2@email.com',
            'phone_number' => '999999991'
        ));
        Customer::create(array(
            'name' => 'Customer 3',
            'surname' => 'Surname 3',
            'dni' => '12345333L',
            'email' => 'customer3@email.com',
            'phone_number' => '999999991'
        ));
    }
}
