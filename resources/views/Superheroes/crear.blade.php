@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Nuevo Héroe
    </div> 
    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 
      <form method="post" action="{{ route('Superheroes.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="Nombre_Real">Nombre_Real:</label> 
          <input type="text" class="form-control" name="Nombre_Real" /> 
        </div> 
        <div class="form-group"> 
          <label for="Nombre_Super">Nombre_Super:</label> 
          <input type="text" class="form-control" name="Nombre_Super" /> 
        </div> 
        <div class="form-group"> 
          <label for="Fotografía">Fotografía :</label> 
          <input type="text" class="form-control" name="Fotografía" />
        </div>
        <div class="form-group"> 
          <label for="Información_Adnal">Información Adicional:</label> 
          <input type="text" class="form-control" name="Información_Adnal" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('Superheroes.index') }}" class="btn btn-primary">Regresar</a> 
      </form> 
    </div> 
  </div> 
@endsection 