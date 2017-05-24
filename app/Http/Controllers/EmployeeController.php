<?php 

namespace App\Http\Controllers;

class EmployeeController extends Controller
{

  public function show(){
      $employees = Employee::getList();
      return view('employees.list', compact($employees));
  }
}

?>