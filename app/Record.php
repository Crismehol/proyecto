<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Record extends Model
{

    protected $table = 'record';
    public $timestamps = true;

    public function hasCustomer()
    {
        return $this->belongsTo('Customer');
    }

//    Funciones de consulta a la base de datos
    // Unión de las tablas record - customer para mostrar un listado de clientes
    public static function getRecordsList(){
        return DB::table('record')
            ->leftJoin('customers', 'customers.id', '=', 'record.customer_id')
            ->select(
                'customers.*',
                'record.customer_id',
                'record.updated_at as update')
            ->get();
    }
    
    // Detalle de un cliente
    public static function getRecordById($customer_id){
        return DB::table('record')
            ->where('record.customer_id', '=', $customer_id )
            ->leftJoin('customers', 'customers.id', '=', 'record.customer_id')
            ->first();
    }

    // Exportación de los detalles del cliente en CSV
    public static function exportCsv($customer_id){
        $data = Record::getRecordById($customer_id);
        $filename = 'Detalles Cliente '.$customer_id;
        Excel::create($filename, function($excel) use($data){
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->fromArray($data);
            });
        })->export('csv');
    }

    // Exportación de los detalles del cliente en CSV
    public static function exportPdf($customer_id){
        $data = Record::getRecordById($customer_id);
        $filename = 'Detalles Cliente '.$customer_id;
        Excel::create($filename, function($excel) use($data){
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->fromArray($data);
            });
        })->export('pdf');
    }
    
    // Creación de nuevo registro de ficha clínica del cliente.
    public static function create($request, $customer_id){
        $record = new Record();
        $record->description = $request->description;
        $record->diopters_right = $request->diopters_right;
        $record->diopters_left = $request->diopters_left;
        $record->astigmatism_right = $request->astigmatism_right;
        $record->astigmatism_left = $request->astigmatism_left;
        $record->axis_right = $request->axis_right;
        $record->customer_id = $customer_id;
        $record->save();
    }
//    TODO: Actualizar datos(nuevos registros) - vistas dinamicas según fecha(?)

}