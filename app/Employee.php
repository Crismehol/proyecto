<?php

namespace App;

use App\Http\Requests\CreateEmployeesFormRequest;
use App\Http\Requests\UpdateEmployeesFormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Employee extends Model
{

    protected $table = 'employees';
    public $timestamps = true;
    
    // Relación con la tabla 'Tickets'
    public function getTickets()
    {
        return $this->hasMany('Ticket');
    }
    
    // Funciones CRUD
    public static function create_employee(CreateEmployeesFormRequest $request)
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

    public static function update_employee(UpdateEmployeesFormRequest $request, $employee_id)
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
    
    // Consultas a la base de datos
    public static function getList(){
        return DB::table('employees')->get();
    }

//    TODO: activar login - autentificación de usuarios - 
}