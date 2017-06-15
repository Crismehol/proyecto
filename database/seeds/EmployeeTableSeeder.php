<?php

use App\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('employees')->truncate();

        Employee::create(array(
            'name' => 'Employee 1',
            'surname' => 'Surname 1',
            'dni' => '14525874M',
            'email' => 'employee1@email.com',
            'user_id' => 1
        ));
        Employee::create(array(
            'name' => 'Employee 2',
            'surname' => 'Surname 2',
            'dni' => '32569874M',
            'email' => 'employee2@email.com',
            'user_id' => 0
        ));
        Employee::create(array(
            'name' => 'Employee 3',
            'surname' => 'Surname 3',
            'dni' => '12345678L',
            'email' => 'employee3@email.com',
            'user_id' => 0
        ));
    }
}
