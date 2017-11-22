<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Customer extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;
    protected $fillable = ['name', 'surname', 'dni','email','phone_number'];

    public function hasRecord()
    {
        return $this->hasOne('Records');
    }

    public function hasTicket()
    {
        return $this->hasOne('Ticket');
    }
    // Consulta a la base de datos
    public static function getCustomerList(){
        return DB::table('customers')->get();
    }

    public static function details($customer_id){
        return Customer::find($customer_id);
    }
    // Funciones CRUD
    public static function createCustomer($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->dni = $request->dni;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
    }

    public static function updateCustomer($request, $customer_id)
    {
        $customer = Customer::find($customer_id);
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->dni = $request->dni;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
    }

    // ======================
    // Exportación de los cliente en CSV
    public static function exportCsv(){
        $data = Customer::getCustomerList();
        $filename = 'Lista de clientes';

        $data_array = array();
        foreach($data as $value){
            $obj = (array)$value;
            array_push($data_array, $obj);
        }

        Excel::create($filename, function($excel) use($data_array){
            $excel->sheet('Sheetname', function($sheet) use($data_array) {
                $sheet->fromArray($data_array);
            });
        })->export('csv');
    }

}