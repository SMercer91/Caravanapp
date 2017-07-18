<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaravanImages extends Model
{
    public function caravan()
    {
        return $this->belongsTo('App\Caravan');
    }
}
