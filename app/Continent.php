<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //

    public function territories(){
        return $this->hasMany('App/Territory');
    }
}
