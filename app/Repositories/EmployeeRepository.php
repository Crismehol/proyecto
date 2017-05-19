<?php

namespace app\Repositories;

use Illuminate\Support\Facades\DB;

class EmployeeRepository{

    public function getList(){
        return $this->basicQuery()->get();
    }
    
    private function basicQuery(){
        return DB::table('employees');
    }
}