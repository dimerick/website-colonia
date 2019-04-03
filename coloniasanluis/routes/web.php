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
    return view('cuentas-claras-2019');
});

Route::get('/historia', function () {
    return view('historia');
});
Route::get('/productos-tipicos', function () {
    return view('productos-tipicos');
});
Route::get('/plan-turismo', function () {
    return view('plan-turismo');
});

Route::get('/festividades-tradicionales', function () {
    return view('festividades-tradicionales');
});

Route::get('/mapa-turistico', function () {
    return view('mapa-turistico');
});

