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

Route::get('/ola/sejabemvindo', function() {

    return "Teste";
});

Route::get('/usuario/{nome}/{n}', function($nome, $n) {

    for($i = 0; $i <= $n; $i++) {
        echo "Olá! Seja bem vindo $nome! <br>";
    }

})->where('nome', '[A-Za-z]+')->where('n', '[0-9]+');

Route::prefix('/aplicacao')->group(function() {

    Route::get('/', function() {
        return view('app');
    })->name('app');

    Route::get('/user', function() {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function() {
        return view('profile');
    })->name('app.profile');

});

Route::get('/produtos', function() {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos1', 'produtos', 301);
Route::get('todosprodutos2', function() {
    return redirect()->route('meusprodutos');
});

////////////////////////////

Route::post('/requisicoes', function(Request $request) {
    return "Hello POST";
});