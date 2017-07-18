<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caravan extends Model
{
    public function images()
    {
        return $this->hasMany('App\CaravanImages');
    }
}