<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;

    public function hasRecord()
    {
        return $this->hasOne('Records');
    }

    public function hasTicket()
    {
        return $this->hasOne('Ticket');
    }
    
    public static function getCustomerList(){
        return DB::table('customers')->get();
    }
    public static function create_customer($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->dni = $request->dni;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
    }

    public static function update_customer($request, $customer_id)
    {
        $customer = Customer::find($customer_id);
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->dni = $request->dni;
        $customer->email = $request->email;
        $customer->job = $request->job;
        $customer->user = $request->email;
        $customer->save();
    }


}