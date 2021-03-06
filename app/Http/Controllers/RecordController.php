<?php 

namespace App\Http\Controllers;

use App\Record;

class RecordController extends Controller{
    
    // Llamada a la función del modelo que extrae los datos de las tablas 'Records' y 'Customers' 
    public function getRecords(){
        $records = Record::getRecordsList();
        return view('record.list', array('records' => $records));
    }
    // Llamada de la función que extrae uno de los registros de la tabla 'Customers'
    public function getDetailsRecordById($customer_id){
        $record_details = Record::getRecordById($customer_id);
        return view('record.details', array('record_details' => $record_details));
    }

    // Crear nuevo registro clínico
    public function create($request, $customer_id){
        Record::create($request, $customer_id);
        return view('customers/records/details/'. $customer_id);
    }
    
    // Llamada funcion exportCsv
    public function exportCsv($customer_id){
        Record::exportCsv($customer_id);
        return back();
    }
    // Llamada funcion exportPdf
    public function exportPdf($customer_id){
        Record::exportPdf($customer_id);
        return back();
    }
  
}

?>