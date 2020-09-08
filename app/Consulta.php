<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Consulta extends Model
{
    protected $table = 'consultas';

    protected $fillable = [
        'name', 'day', 'process', 'hours', 'dentist','money'
    ];
    //protected $dateFormat = "d-m-y";

    protected function paciente(){
        return $this->belongsTo('App\Paciente');
    }
    protected function dentista(){
        return $this->belongsTo('App\Dentista');  
    } 

    protected function getPaciente(){
        $user = Paciente::all();
        $user = DB::table('pacientes')->select('name')->get();
            return $user;
    }

    protected function getDentista(){
        $user = Dentista::all();
        $user = DB::table('dentistas')->select('name')->get();
            return $user;
    }

    protected function getConsultasDoDia(){
        $diaAtual = Carbon::now();
        $dia =  $diaAtual->toDateTimeString();
        
        $consultasDeHoje = Consulta::where('day', '>=', $dia)->orderBy('day', 'asc')->orderBy('hours', 'asc')->get(); 
            return $consultasDeHoje;
    }

    


}
