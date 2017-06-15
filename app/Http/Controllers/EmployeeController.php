<?php 

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\CreateEmployeesFormRequest;
use App\Http\Requests\UpdateEmployeesFormRequest;
use App\User;

class EmployeeController extends Controller
{

    public function show(){
        $employees = User::getUsersEmployees();
        return view('employees.list', array('employees' => $employees));
    }

    public function create(CreateEmployeesFormRequest $request){
        Employee::create_employee($request);
        return redirect('employees/list');
    }

    public function update(UpdateEmployeesFormRequest $request, $employee_id){
        Employee::update_employee($request, $employee_id);
        return redirect('employees/list');
    }
    
    public function delete($employee_id){
        $employee = Employee::find($employee_id);
        $employee->delete();
        return redirect('employees/list');
    }

    public function details($employee_id){
        return Employee::find($employee_id);
    }
}

?>