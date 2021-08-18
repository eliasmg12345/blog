@extends('layouts.plantilla')

@section('title','cursos')
    
@section('content')
    <h1>Bienvenido a la pagina Cursos</h1>  
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $c)
            <li>
                <a href="{{route('cursos.show',$c->id)}}">{{$c->name}}</a>
                
            </li>
        @endforeach
    </ul>
    
    {{$cursos->links()}}
@endsection
    
