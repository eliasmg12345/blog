<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // B2
    // para que el controlador administre tres rutas distintas entonces 
    // lo que aremos es crear tres metodos con el nombre que queramos
    // por convencion al metodo principal se le llama index()

    public function index(){

        $cursos=Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',compact('cursos'));
    }
    // al metodo encargado de mostrarte el formulario se le llama create
    public function create(){
        return view('cursos.create');
    }

    //el tipo request es que cualquier cosa que se envie va a ser almacenado
    //EN ESTE OBJETO
    public function store(request $request){
        
        //validando ...Utilizando el motodo del objeto request que se llama VALIDATE
        //deacuerdo a los name de cada input
        $request->validate([
            'name'=>'required|max:10',
            'descripcion'=>'|min:10 ',
            'categoria'=>'required'
        ]);
        

        $curso =new Curso();

        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;

        
        $curso->save();
        return redirect()->route('cursos.show',$curso);

    }
    // al metodo encargado de mostrarte un curso en particular se llama show
    // para pasarle la variable $curso debo pasarle commo segundo parametro  un array
    public function show(curso $curso){
        // return view('cursos.show',['curso'=>$curso]);
        // el compact es mas abreviado:

        // recuperando un registro por su ID
        //$curso=Curso::find($id);

        return view('cursos.show',compact('curso'));
    }
    public function showa($curso,$categoria=null){
        return view('cursos.showa',compact('curso','categoria'));
    }

    public function edit(curso $curso){
        
        return view('cursos.edit',compact('curso'));
    }
    public function update(Request $request,Curso $curso){

        //validando ...Utilizando el motodo del objeto request que se llama VALIDATE
        //deacuerdo a los name de cada input
        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);
        


        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }
}
