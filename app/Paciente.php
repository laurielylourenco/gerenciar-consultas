<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $table = 'pacientes';
	
    protected $fillable = [
        'phone', 'name', 'street', 'number_house'
    ];
    protected function consulta(){
        return $this->hasMany('App/Consulta');
    }
}
