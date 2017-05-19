<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model 
{

    protected $table = 'provider';
    public $timestamps = true;

    public function hasProducts()
    {
        return $this->hasMany('Product');
    }

}