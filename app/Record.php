<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{

    protected $table = 'record';
    public $timestamps = true;

    public function hasCustomer()
    {
        return $this->belongsTo('Customer');
    }

}