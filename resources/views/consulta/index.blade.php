@extends('layouts.app')
@section('content')
@foreach($consultasDodia as $consulta)
	<div class="list-group mt-2">
	  	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		
	    <div class="d-flex w-100 justify-content-between">
			
	      <h5 class="mb-1">Dentista:{{$consulta->dentist}}</h5>
	      <small>Horario da consulta:{{$consulta->hours}}</small>
	    </div>
	    	<p class="mb-1">Process:{{$consulta->process}}</p>
	    	<p class="mb-1">Pacient:{{$consulta->name}}</p>
	    	<p class="text-muted">Price:{{$consulta->money}}</p>
	 	 </a>
		
	</div>

@endforeach




@endsection
