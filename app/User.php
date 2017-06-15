<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

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

}