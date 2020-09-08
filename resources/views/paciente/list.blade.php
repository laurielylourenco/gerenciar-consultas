@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
      <tr>
       
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Street</th>
        <th scope="col">Number_House</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pacientes ?? '' as $paciente)
            
       
      <tr> 
        <td>{{$paciente->name}}</td>
        <td>{{$paciente->phone}}</td>
        <td>{{$paciente->street}}</td>
        <td>{{$paciente->number_house}}</td>
        <td>
            <a type="button" class="btn btn-outline-success" href="{{route('paciente.edit',$paciente->id)}}">Update</a>
        </td>
        <td>

        <form action="{{route('paciente.destroy',$paciente->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Danger</button>
            
        </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>

@endsection