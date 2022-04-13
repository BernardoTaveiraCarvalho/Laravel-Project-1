<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    public function player(){
        return $this->hasOne('App\Player');
    }
}
