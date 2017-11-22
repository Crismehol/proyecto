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
    protected $fillable = ['name', 'surname', 'dni','email','user_id'];

    // Relación con la tabla 'Tickets'
    public function getTickets()
    {
        return $this->hasMany('Ticket');
    }

    public function hasUser()
    {
        return $this->belongsTo('User');
    }
    
    // Funciones CRUD
    public static function create_employee(CreateEmployeesFormRequest $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dni = $request->dni;
        $employee->email = $request->email;
        $employee->user_id = $request->job;
        $employee->save();
    }

    public static function update_employee(UpdateEmployeesFormRequest $request, $employee_id)
    {
        $employee = Employee::find($employee_id);
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dni = $request->dni;
        $employee->email = $request->email;
        $employee->save();
    }
    
    public static function delete_employees($employee_id){
        $employee = Employee::find($employee_id);
        $employee->delete();
    }
    // Consultas a la base de datos
    public static function getList(){
        return DB::table('employees')->get();
    }

}