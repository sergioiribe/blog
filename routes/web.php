<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');  
    Route::get('cursos/create','create')->name('cursos.create');  
    Route::post('cursos','store')->name('cursos.store'); 
    Route::get('cursos/{id}', 'show')->name('cursos.show');  

});

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if($categoria){
//         return "Bienvenido al curso: $curso, de la categoría:  $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }

// });

