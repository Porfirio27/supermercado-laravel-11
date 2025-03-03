<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Chamando rotas MSFLIX organizadas
foreach(File::allFiles(__DIR__.'/web') as $route_files){
    require $route_files->getPathname();
}

require __DIR__.'/auth.php';





