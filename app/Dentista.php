<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $table = 'dentistas';

    protected function consulta(){
        return $this->hasMany('App\Consulta');
    }
}
