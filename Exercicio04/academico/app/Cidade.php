<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function estado() {
      return $this->belongsTo('App\Estado');
    }

    public function alunos() {
        return $this->hasMany('App\Aluno');
    }
}
