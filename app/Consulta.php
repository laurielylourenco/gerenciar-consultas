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
    

    protected function paciente(){
        return $this->belongsTo(Paciente::class);
    }
    protected function dentista(){
        return $this->belongsTo(Dentista::class);  
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

    protected function getDentistaID($nome){  
        $dentista = DB::table('dentistas')->select('id')->where('name','=', $nome)->get();
        return $dentista;
    }

   

    protected function getConsultasDoDia(){
        $diaAtual = Carbon::now();
        $dia =  $diaAtual->toDateTimeString();
        
        $consultasDeHoje = Consulta::where('day', '>=', $dia)->orderBy('day', 'asc')->orderBy('hours', 'asc')->get(); 
            return $consultasDeHoje;
    }

    


}
