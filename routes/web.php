<?php

use Illuminate\Support\Facades\Route;
// A4. aca colocamos la ruta del controler pero adicionando \HomeController
use App\Http\Controllers\HomeController;

// B1
use App\Http\Controllers\CursoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// A5. ahora modificamos este Route y anadiendo el metodo en A6. => HomeController.php 
Route::get('/', HomeController::class);

// B3 como el metodo no es __invoke se pone en forma de array [] luego , debemos 
// pasarle el nombre del metodo de ese controlador
Route::get('cursos',[CursoController::class,'index']);

Route::get('cursos/create', [CursoController::class,'create']);

Route::get('cursos/{id}',[CursoController::class,'show']);

Route::get('cursos/{a}/{b?}', [CursoController::class,'showa']);

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
//     if($categoria){
//         return "bienvenido al curso $curso de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso $curso";
//     }
// });

