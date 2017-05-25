<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{

    protected $table = 'employees';
    public $timestamps = true;
    
    // Función de la relación con la tabla 'Tickets'
    public function getTickets()
    {
        return $this->hasMany('Ticket');
    }
    
    // Funciones CRUD
    public static function create_employee($request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dni = $request->dni;
        $employee->email = $request->email;
        $employee->job = $request->job;
        $employee->user = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->save();
    }

    public static function update_employee($request, $employee_id)
    {
        $employee = Employee::find($employee_id);
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dni = $request->dni;
        $employee->email = $request->email;
        $employee->job = $request->job;
        $employee->user = $request->email;
        $employee->save();
    }
    
    public static function delete_employee($employee_id){
        $employee = Employee::find($employee_id);
        $employee->delete();
    }
    
    // Consultas a la base de datos
    public static function getList(){
        return DB::table('employees')->get();
    }

}