<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaravanExtras extends Model
{
    public function caravan()
    {
        return $this->belongsTo('App\Caravan');
    }
}
