<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const PASSWORD = '$2y$10$Ur6ecNbZYoRRjQKnh81wOe3niesiflm4.cwzCCY8l96STadDmLqne';

    public function run()
    {
        //
        DB::table('users')->truncate();

        User::create(array(
            'email' => 'admin@email.com',
            'password' => self::PASSWORD,
            'job' => '1'
        ));
        User::create(array(
            'email' => 'employe@email.com',
            'password' => self::PASSWORD,
            'job' => '0'
        ));
    }
}
