<?php 

namespace App\Http\Controllers;

use App\Record;

class RecordController extends Controller{
    
    public function show(){
        $records = Record::getRecords();
        return view('record.list', array($records => 'records'));
    }
    
    public function getDetailsRecordById($customer_id){
        $recod_details = Record::getRecordById($customer_id);
        return view('record.details', array($recod_details => 'recod_details'));
    }
  
}

?>