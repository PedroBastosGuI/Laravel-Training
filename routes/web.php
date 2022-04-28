<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [SiteController::class , 'index']); //fazendo um apontamento de rota
Route::get('/sair', [SiteController::class, 'goback']);
Route::get('/usuarios/{id}', [SiteController::class, 'users']);
