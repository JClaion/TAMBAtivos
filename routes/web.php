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



Route::get('/teste_lista', [UserController::class , 'index'])->name('teste_lista.index');
Route::post('/teste_lista', [UserController::class, 'store'])->name('teste_lista.store');
Route::get('/relatorio', [RelatorioController::class , 'index'])->name('relatorio.index');
Route::get('/ativo', [AtivoController::class , 'index'])->name('ativo.index');


Route::get('/teste_lista/{id}/edit', [UserController::class, 'edit'])->name('teste_lista.edit');
Route::put('/teste_lista/{user}', [UserController::class, 'update'])->name('teste_lista.update');

Route::delete('/teste_lista/{id}/destroy', [UserController::class, 'destroy'])->name('teste_lista.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
