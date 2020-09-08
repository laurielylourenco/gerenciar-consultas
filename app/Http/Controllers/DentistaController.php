<?php

namespace App\Http\Controllers;
use App\Dentista;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    protected $dentista;

    
    public function getUser(Request $request){
      
        $this->dentista = DB::table('dentistas')->get();
        
        foreach ($this->dentista as $user) {
            return $user->name;
        }
        
       
    }
}
