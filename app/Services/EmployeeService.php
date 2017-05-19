<?php
/**
 * Created by PhpStorm.
 * User: Crismehol
 * Date: 14/05/2017
 * Time: 21:39
 */

namespace app\Services;

use app\Repositories\EmployeeRepository;

class EmployeeService{
    
    private $employeeRepository;
    
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    
    public function getList(){
        return $this->employeeRepository->getList();
    }
}