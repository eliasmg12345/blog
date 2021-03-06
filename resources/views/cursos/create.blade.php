@extends('layouts.plantilla')

@section('title','cursos create')
    
@section('content')
    <h1>En esta pagina podras crear un curso</h1>  
    
    <form action="{{route('cursos.store')}}" method="POST">
        <!--Se ecncarga de agregar un token-->
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5" value="{{old('descripcion')}}"></textarea>
        </label>
        
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit"> Envirar formulario</button>
    </form>
@endsection
    
