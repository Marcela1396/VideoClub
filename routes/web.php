<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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
// Ruta /
Route::get('/', [HomeController::class, 'getHome']);

// Ruta Login
Route::get('login', function () {
    return view('auth.login');
});
// Ruta logout
Route::get('logout', function () {
    return "Logout usuario";
});
// Ruta Catalogo
Route::get('catalog', [CatalogController::class, 'getIndex']);

// Ruta Catalogo/Show => Parametros
Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
    
// Ruta Catalogo/Create
Route::get('catalog/create', [CatalogController::class, 'getCreate']);

// Ruta Catalogo/Edit => Parametros
Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit']);
