<?php 

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\customer\CreateCustomerFormRequest;
use App\Http\Requests\UpdateEmployeesFormRequest;

class CustomerController extends Controller{
    
    public function show(){
        $customers = Customer::getCustomerList();
        return view('customers/list', array('customers' => $customers));
    }
    
    public function create(CreateCustomerFormRequest $request){
        Customer::create_customer($request);
        return view('customers/list');
    }
    
}