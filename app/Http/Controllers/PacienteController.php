<?php

namespace App\Http\Controllers;
use App\Paciente;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;

class PacienteController extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pacientes = Paciente::all();
       return view('paciente.list', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteRequest $request)
    {
        $paciente = new Paciente;
        $paciente->name = $request->name;
        $paciente->phone = $request->phone;
        $paciente->street = $request->street;
        $paciente->number_house = $request->number_house;

        $paciente->save();
        return view('paciente.create')->with('Cadastro completo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacientes = Paciente::findOrFail($id);
        return view('paciente.edit', compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request, $id)
    {
         $update = [
            'name' => $request->name,
            'phone' => $request->phone,
            'street' => $request->street, 
            'number_house' => $request->number_house
            ];

            Paciente::whereId($id)->update($update);
            return redirect('/paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pacientes = Paciente::findOrFail($id);
       $pacientes->delete();

       return redirect('/paciente');
    }
}
