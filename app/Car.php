<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function player(){
        return  $this->belongsTo('App\Player');
    }

}
