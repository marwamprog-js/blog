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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function() {
    return view('produtos.produtos');
})->name('produtos');

Route::get('departamentos', function() {
    return view('departamentos.departamentos');
})->name('departamentos');

Route::resource('clientes', 'ClienteControlador');

Route::get('opcoes/{opcao?}', function($opcao=null) {
    return view('opcoes', compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function() {
    return view('exemplo');
});