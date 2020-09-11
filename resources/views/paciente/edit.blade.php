@extends('layouts.app')
@section('content')

<div>
    @if ($errors->any())
    <div class="alert alert-danger mt-2">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif

  <form method="post" action="{{ route('paciente.update', $pacientes->id) }}">
    <div class="mt-4 form-group">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$pacientes->name}}"/>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{$pacientes->phone}}"/>
    </div>
    <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" name="street" id="street" value="{{$pacientes->street}}"/>
    </div>
    <div class="form-group">
        <label for="quantity">Number House</label>
        <input type="text" class="form-control" id="number_house" name="number_house" value="{{$pacientes->number_house}}"/>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
