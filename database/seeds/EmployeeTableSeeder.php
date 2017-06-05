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

    const PASSWORD = '$2y$10$Ur6ecNbZYoRRjQKnh81wOe3niesiflm4.cwzCCY8l96STadDmLqne';

    public function run()
    {
        DB::table('employees')->truncate();

        Employee::create(array(
            'name' => 'Employee 1',
            'surname' => 'Surname 1',
            'dni' => '14525874M',
            'email' => 'employee1@email.com',
            'job' => '0',
            'user' => 'user1@email.com',
            'password' => self::PASSWORD
        ));
        Employee::create(array(
            'name' => 'Employee 2',
            'surname' => 'Surname 2',
            'dni' => '32569874M',
            'email' => 'employee2@email.com',
            'job' => '0',
            'user' => 'user2@email.com',
            'password' => self::PASSWORD
        ));
        Employee::create(array(
            'name' => 'Employee 3',
            'surname' => 'Surname 3',
            'dni' => '12345678L',
            'email' => 'employee3@email.com',
            'job' => '1',
            'user' => 'user3@email.com',
            'password' => self::PASSWORD
        ));
    }
}
