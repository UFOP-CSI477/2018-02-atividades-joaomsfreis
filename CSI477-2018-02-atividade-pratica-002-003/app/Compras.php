<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    public function produtos(){
        return $this->hasMany('App\Comment');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
