<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;

    public function hasRecord()
    {
        return $this->hasOne('Recordssss');
    }

    public function hasTicket()
    {
        return $this->hasOne('Ticket');
    }

}