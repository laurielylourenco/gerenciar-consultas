@extends('layouts.app')
@section('content')

<div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif

  <form method="post" action="{{ route('paciente.store') }}">
    <div class="mt-4 form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"/>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone"/>
    </div>
    <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" name="street" id="street"/>
    </div>
    <div class="form-group">
        <label for="quantity">Number House</label>
        <input type="text" class="form-control" id="number_house" name="number_house"/>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<div class="mt-4">
  <a href="{{route('paciente.index')}}" class="btn btn-info">Lista de Pacientes</a>
</div>
 
</div>
@endsection

