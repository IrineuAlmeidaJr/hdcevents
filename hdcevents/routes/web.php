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

Route::get('/', function () {

    $nome = "Irineu";
    $idade = 30;
    $profissao = "Programador";

    $arr = [1.3, 2.3, 3.4, 4, 5];

    $nomes = ["Irineu", "Maria", "Junior", "Hosana", "Natalia"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});

