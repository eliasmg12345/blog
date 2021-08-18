@extends('layouts.plantilla')

@section('title','cursos cedit')
    
@section('content')
    <h1>En esta pagina podras editar un curso</h1>  
    
    <form action="{{route('cursos.update',$curso)}}" method="post">
        <!--Se ecncarga de agregar un token-->
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        <br>
        @error('name')
            <small>*{{$message }}</small>
        @enderror
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5" >{{old('descripcion',$curso->descripcion)}}
            </textarea>
        </label>

        
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>

        
        <br>
        @error('categoria')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <button type="submit"> Actualizar formulario</button>
    </form>
@endsection
    
