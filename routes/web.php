<?php

use App\Http\Controllers\Backend\AdminController;
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

//Rota admin Login
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

//Rota admin recuperar senha
Route::get('admin/forgot-password', [AdminController::class, 'forgot'])->name('admin.forgot');





