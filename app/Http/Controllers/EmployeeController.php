<?php 

namespace App\Http\Controllers;

use App\Employee;

class EmployeeController extends Controller
{

  public function show(){
      $employees = Employee::getList();
      return view('employees.list', array('employees' => $employees));
  }
}

?>