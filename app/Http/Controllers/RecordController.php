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
  
}

?>