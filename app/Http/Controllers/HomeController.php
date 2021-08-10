<?php

// A1. para crear un controller escribir en la consola php artisan make:controller <nombreController(controller es por convencion)>

// A2. un namespace no es mas que mostrar el lugar donde se encuentra este archivo
namespace App\Http\Controllers;

// esta parte se explicara en el momento de hacer un crud
use Illuminate\Http\Request;

// A3. aqui se escribira una serie de metodos que se encargaran de administrar nuestras rutas 
// el control de la ruta al controlador varia de la version de laravel 8 a las anteriores
// entonces en web.php adicionamos el use con la ubicacion del use presente aca arriba 
// luego en A4. =>web.php
class HomeController extends Controller
{
    //A6. colocando el metodo que ya no esta en Route de Web.php    
    // el metodo __invokees cuando el controlador administra una unica ruta
    public function __invoke()
    {
        // return view('welcome');
        // C1. para solicitar que me retorne una vista 
        // debo escribir el metodo view()...debo poner entre comillas simples
        // la vista de la carpeta views sin especificar que es .php
    return view('home');
    }
}
