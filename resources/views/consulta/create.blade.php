@extends('layouts/app')
@section('content')
<form action="{{ route('consulta.store') }}" method="post">
    <div class="mt-4 form-group">
     @csrf
        <label for="name">Name</label>
        <input list="name" value="" class="form-control" name="name">
        <datalist  id="name" >
                @foreach($pacientes  as $paciente)
                <option>{{$paciente->name}}</option>
                @endforeach
        </datalist>

    </div>

    <div class=" form-group">
        <label for="hour">Process</label>
        <select  class="form-control" id="process" name="process">
            <option value="canal">Canal</option>
            <option value="restaurar">Resturar</option>
            <option value="aparelho">Aparelho</option>
        </select>
    </div>
    <div class="form-group">
        <label for="day">Day</label>
        <input type="date" class="form-control" id="day" name="day" />

    </div>
    <div class=" form-group">
        <label for="hour">Hours</label>
        <input type="time" class="form-control" id="hours" name="hours" />
    </div>
    <div class="form-group">
        <label for="dentist">Dentist</label>
        <select  class="form-control" id="dentist" name="dentist">
                @foreach($dentistas as $d)
                <option>{{$d->name}}</option>
                @endforeach
        </select>

    </div>
    <div class="form-group">
        <input type="hidden" name="money" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>

 

</form>
@endsection