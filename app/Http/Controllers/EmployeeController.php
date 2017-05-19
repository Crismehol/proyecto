<?php 

namespace App\Http\Controllers;

use app\Services\EmployeeService;

class EmployeeController extends Controller
{
  private $employeeService;
  
  public function __construct(EmployeeService $employeeService)
  {
    $this->employeeService = $employeeService;
  }

  public function show(){
      $employees = $this->employeeService->getList();
      return view('employees.list', array('employees' => $employees));
  }
}

?>