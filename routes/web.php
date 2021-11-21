<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;


Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/quem_somos', function () {
    return view('site.quemsomos');
})->name('site.quem_somos');

Route::get('/servicos', function () {
    return view('site.servicos');
})->name('site.servicos');

Route::get('/cortes', function () {
    return view('site.cortes');
})->name('site.cortes');

Route::get('/barba', function () {
    return view('site.barba');
})->name('site.barba');

// Route::resource('/contato', ContatoController::class);


Route::get('/contato', [ContatosController::class, 'create']);
Route::post('/contato', [ContatosController::class, 'store'])->name('contato');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
