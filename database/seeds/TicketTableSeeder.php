<?php

use App\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tickets')->truncate();
        
        Ticket::create(array(
            'employee_id' => 1, 
            'customer_id' => 1
        ));
        Ticket::create(array(
            'employee_id' => 2, 
            'customer_id' => 2
        ));
        Ticket::create(array(
            'employee_id' => 3, 
            'customer_id' => 3
        ));

    }
}
