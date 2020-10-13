<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('home');
});
// Ruta Login
Route::get('login', function () {
    return view('auth.login');
});
// Ruta logout
Route::get('logout', function () {
    return "Logout usuario";
});
// Ruta Catalogo
Route::get('catalog', function () {
    return view('catalog.index');
});
// Ruta Catalogo/Show => Parametros
Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show', array('id' => $id));
});
// Ruta Catalogo/Create
Route::get('catalog/create', function () {
    return view('catalog.create');
});
// Ruta Catalogo/Edit => Parametros
Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit', array('id' => $id));
});

