<?php 

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{
//    Funciones de consulta a la tabla Users.
    public function getUsers(){
        return DB::table('users')->get();
    }
    
    public function getUsersEmployee($user_id){
        return DB::table('users')
            ->where('users.id', '=', 'employees.'.$user_id)
            ->leftJoin('employees', 'employees.user_id', '=', 'users.id')
            ->get();
    }
    
    public function createUser(CreateUserFormRequest $request){
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
    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}

?>