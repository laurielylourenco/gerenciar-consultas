<?php

namespace App\Http\Controllers;
use App\Consulta;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultaRequest;
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       
       $consultasDodia = Consulta::getConsultasDoDia();
       // dd($consultasDodia);
      return view('consulta.index', compact('consultasDodia')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $pacientes = Consulta::getPaciente();  
        $dentistas = Consulta::getDentista();    
        return view('consulta.create', compact('pacientes', 'dentistas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultaRequest $request)
    {
        $consulta = new Consulta;

        $consulta->name = $request->name;
        $consulta->day = $request->day;
        $consulta->process = $request->process;
        $consulta->hours = $request->hours;
        $consulta->dentist = $request->dentist;
        $consulta->money = $request->money;


        if ($consulta->process == "canal") {
            $consulta->money = 550.00;
        }elseif ($consulta->process == "aparelho") {
            $consulta->money = 80.00;
        }elseif ($consulta->process == "restaurar") {
            $consulta->money = 600.00;
        }else{
            echo "valor nao encontrado";
        }
        $consulta->save();
        return redirect('/consulta/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
