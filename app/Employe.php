<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';
    public $timestamps = true;

    public function getTickets()
    {
        return $this->hasMany('Ticket');
    }

}