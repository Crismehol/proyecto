<?php 

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{
    public function create(CreateUserFormRequest $request){
        return User::createUser($request);
    }
    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}

?>