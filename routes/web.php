<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
  //  return view ('home');
//});
//outra forma de chamar uma rota trazendo os dados da view criada na pasta resources--> views
Route::view ('/', 'home');

Route::get('/clientes', function () {
    echo "Página com os dados dos clientes cadastrados";
});
//rota que retorna os dados do cliente referente ao codigo informado na URL
Route::get('/clientes/{codigo}/nome/{nome}', function ($codigo, $nome) {
    echo "Essa é a página do cliente ".$codigo. " que se chama " .$nome;
});

