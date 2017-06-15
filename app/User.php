<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticable
{
    use Notifiable;

//    protected $table = 'users';
//    public $timestamps = true;
//
//    public function hasEmployee()
//    {
//        return $this->hasOne('Employee');
//    }
    protected $fillable = ['email', 'password'];
    protected $hidden = ['password'];


//    Funciones de consulta a la tabla Users.
    public static function getUsers(){
        return DB::table('users')->get();
    }

    public static function getUsersEmployees(){
        return DB::table('users')
            ->leftJoin('employees', 'employees.user_id', '=', 'users.id')
            ->select('employees.*', 'users.email as user')
            ->get();
    }

    public static function createUser(CreateUserFormRequest $request){
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }
//    public function updateUser(UpdateUserFormRequest $request, $user_id){
//        $user = User::find($user_id);
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//        $user->save();
//        return $user;
//    }
}