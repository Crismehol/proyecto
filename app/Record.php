<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{

    protected $table = 'record';
    public $timestamps = true;

    public function hasCustomer()
    {
        return $this->belongsTo('Customer');
    }

//    Funciones de consulta a la base de datos

    public static function getRecords(){
        return DB::table('record')
            ->get();
        
    }
    // Unión de las tablas record - customer
    public static function getRecordById($customer_id){
        return DB::table('record')
            ->where('record.customer_id', '=', $customer_id )
            ->leftJoin('customers', 'customer.id', '=', 'record.customer_id')
            ->first();
    }

}