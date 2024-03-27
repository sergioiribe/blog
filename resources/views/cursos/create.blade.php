@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf

        <label for="name">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label for="descripcion">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        <label for="categoria">
            Categoria: 
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
    
@endsection