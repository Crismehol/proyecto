<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketProduct extends Model 
{

    protected $table = 'tickets_products';
    public $timestamps = true;

    public function getTicket()
    {
        return $this->hasMany('Ticket');
    }

    public function getProducto()
    {
        return $this->hasMany('Product');
    }

}