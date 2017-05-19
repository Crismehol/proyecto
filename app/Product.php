<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{

    protected $table = 'products';
    public $timestamps = true;

    public function getTicketProduct()
    {
        return $this->belongsTo('TicketProduct');
    }

    public function hasProvider()
    {
        return $this->belongsTo('Provider');
    }

}