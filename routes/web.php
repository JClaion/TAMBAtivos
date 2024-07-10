<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\AtivoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste_lista', [UserController::class , 'index'])->name('teste_lista.index');
Route::get('/relatorio', [RelatorioController::class , 'index'])->name('relatorio.index');
Route::get('/ativo', [AtivoController::class , 'index'])->name('ativo.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
