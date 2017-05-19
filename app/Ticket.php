<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model 
{

    protected $table = 'tickets';
    public $timestamps = true;

    public function hasCustomer()
    {
        return $this->belongsTo('Customer');
    }

    public function hasEmployee()
    {
        return $this->belongsTo('Employe');
    }

    public function hasTicketProduct()
    {
        return $this->belongsTo('TicketProduct');
    }

}