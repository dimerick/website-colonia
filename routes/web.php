<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/noticia', function () {
    return view('noticia');
});

Route::get('/rendicion-cuentas', function () {
    return view('cuentas-claras');
});

Route::get('/torneo', function () {
    return view('torneo');
});
Route::get('/categorias', function () {
    return view('categorias');
});
Route::get('/reglamento', function () {
    return view('reglamento');
});
Route::get('/terminos-condiciones', function () {
    return view('terminos-condiciones');
});
Route::get('/programa', function () {
    return view('programa');
});
Route::get('/alojamiento-transporte', function () {
    return view('alojamiento-transporte');
});

Route::get('/precios', function () {
    return view('precios');
});

Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});

Route::get('/inscripcion', function () {
    return view('inscripcion');
});

Route::get('/politica-proteccion-datos', function () {
    return view('proteccion-datos');
});