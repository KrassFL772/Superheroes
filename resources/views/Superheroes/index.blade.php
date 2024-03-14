@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    <div class="row"> 
      <a class="btn btn-primary" href="{{ route('Superheroes.crear') }}">Agregar</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Super_ID</th> 
          <th>Nombre Real</th> 
          <th>Nombre Super</th> 
          <th>Fotografía</th>
          <th>Información Adicional</th>
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($superheroes as $superheroe) 
          <tr> 
            <td><a href="{{ route('Superheroes.show', $superheroe->Super_ID) }}">{{ $superheore->Super_ID }}</a></td> 
            <td><a href="{{ route('Superheroes.show', $superheroe->Super_ID) }}">{{ $superheore->Nombre_Real }}</a></td> 
            <td><a href="{{ route('Superheroes.show', $superheroe->Super_ID) }}">{{ $superheore->Nombre_Super }}</a></td> 
            <td><a href="{{ route('Superheroes.show', $superheroe->Super_ID) }}">{{ $superheore->Fotografía }}</a></td> 
            <td><a href="{{ route('Superheroes.show', $superheroe->Super_ID) }}">{{ $superheore->Información_Adnal }}</a></td> 
            <td><a href="{{ route('Superheroes.edit', $superheroe->Super_ID) }}" class="btn btn-primary">Editar</a></td> 
            <td> 
              <form action="{{ route('Superheroes.destroy', $superheroe->Super_ID) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Eliminar</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection