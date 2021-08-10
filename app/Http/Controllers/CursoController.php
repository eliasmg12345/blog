<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // B2
    // para que el controlador administre tres rutas distintas entonces 
    // lo que aremos es crear tres metodos con el nombre que queramos
    // por convencion al metodo principal se le llama index()

    public function index(){
        return view('cursos.index');
    }
    // al metodo encargado de mostrarte el formulario se le llama create
    public function create(){
        return view('cursos.create');
    }
    // al metodo encargado de mostrarte un curso en particular se llama show
    // para pasarle la variable $curso debo pasarle commo segundo parametro  un array
    public function show($curso){
        // return view('cursos.show',['curso'=>$curso]);
        // el compact es mas abreviado:
        return view('cursos.show',compact('curso'));
    }
    public function showa($curso,$categoria=null){
        return view('cursos.showa',compact('curso','categoria'));
    }
}
