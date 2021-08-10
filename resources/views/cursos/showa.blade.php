@extends('layouts.plantilla')

@section('title','curso: '.$curso.' categoria: '.$categoria)

@section('content')
    <h1>Bienvenido al curso {{$curso}} de la categoria {{$categoria}}</h1>
@endsection