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

    public function update(CreateCustomerFormRequest $request, $customer_id){
        Customer::updateCustomer($request, $customer_id);
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
    // Llamada al método exportCsv del modelo Customer
    // Retorna a la ruta anterior, cuando se ejecuta
    public function exportCsv(){
        Customer::exportCsv();
        return back();
    }
    
}