<?php 

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CreateCustomerFormRequest;

class CustomerController extends Controller{
    
    public function show(){
        $customers = Customer::getCustomerList();
        return view('customers/list', array('customers' => $customers));
    }
    
    public function create(CreateCustomerFormRequest $request){
        Customer::createCustomer($request);
        return back();
    }
    
    public function details($customer_id){
        return Customer::details($customer_id);
    }

    public function delete($customer_id){
        $customer = Customer::find($customer_id);
        $customer->delete();
        return back();
    }
    
}