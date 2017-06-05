<?php

use App\Record;
use Illuminate\Database\Seeder;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('record')->truncate();

        Record::create(array(
            'description' => 'Datos cliente 1',
            'diopters_right' => '3.00',
            'diopters_left' => '-0.25',
            'astigmatism_right' => '-1.25',
            'astigmatism_left' => '-0.25',
            'axis_right' => '12',
            'axis_left' => '170',
            'customer_id' => 1
        ));
        Record::create(array(
            'description' => 'Datos cliente 2',
            'diopters_right' => '3.00',
            'diopters_left' => '-0.25',
            'astigmatism_right' => '-1.25',
            'astigmatism_left' => '-0.25',
            'axis_right' => '12',
            'axis_left' => '170',
            'customer_id' => 2
        ));
        Record::create(array(
            'description' => 'Datos cliente 3',
            'diopters_right' => '3.00',
            'diopters_left' => '-0.25',
            'astigmatism_right' => '-1.25',
            'astigmatism_left' => '-0.25',
            'axis_right' => '12',
            'axis_left' => '170',
            'customer_id' => 3
        ));
    }
}
