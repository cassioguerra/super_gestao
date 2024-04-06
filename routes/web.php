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

O objeto Route vai cuidar de todas as rotas
metodo
get
post
put
delete
patth

como funciona a funçõa

router ::get(metodo de busca... ) ( 'url' calback( a ação que vai sert tomada quando essa url for acessada){
 return
})
*/
// form de contruir rotas


Route::get('/', function () {
    return 'OLA SEJA BEM VINDO AO CURSO DO PHP E LARAVEL' ;
});
Route::get('/sobre-nos', function () {
    return ' SOBRE NOS ' ;
});
Route::get('/contato', function () {
    return 'contato' ;
});
