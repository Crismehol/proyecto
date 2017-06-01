<?php 

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\CreateEmployeesFormRequest;
use App\Http\Requests\UpdateEmployeesFormRequest;

class EmployeeController extends Controller
{

    public function show(){
        $employees = Employee::getList();
        return view('employees.list', array('employees' => $employees));
    }

    public function create(CreateEmployeesFormRequest $request){
        Employee::create_employee($request);
        $employees = Employee::getList();
        return view('employees.list', array('employees' => $employees));
    }

    public function update(UpdateEmployeesFormRequest $request, $employee_id){
        Employee::update_employee($request, $employee_id);
        return view('employees.list');
    }
    
    public function delete($employee_id){
        Employee::delete_employee($employee_id);
        return view('employees.list');
    }

}

?>