<?php

use App\Http\Controllers\AtivoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelatorioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminscreen', function (){
    return view('admin.index');
});

Route::group([

    'prefix' => 'admin',
    'as' => 'admin.',

], function(){

    Route::get('/teste_lista', [UserController::class , 'index'])->name('teste_lista.index');
    Route::get('/relatorios', [RelatorioController::class , 'index'])->name('relatorio.index');
    Route::get('/ativos', [AtivoController::class , 'index'])->name('ativo.index');

    Route::get('/teste_lista/{id}/edit', [UserController::class, 'edit'])->name('teste_lista.edit');

    Route::put('/teste_lista/{user}', [UserController::class, 'update'])->name('teste_lista.update');
    Route::delete('/teste_lista/{id}/destroy', [UserController::class, 'destroy'])->name('teste_lista.destroy');
    Route::post('/teste_lista', [UserController::class, 'store'])->name('teste_lista.store');

    Route::get('/ativos/{id}/edit', [AtivoController::class, 'edit'])->name('ativos.edit');
    Route::put('/ativos/{asset}', [AtivoController::class, 'update'])->name('ativos.update');

    Route::get('/ativos/cadastro', [AtivoController::class, 'create'])->name('ativos.create');
    Route::post('/ativos/cadastro', [AtivoController::class, 'store'])->name('ativos.store');


});

Route::get('/lista', function () {
    return view('admin.user.teste_lista');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
