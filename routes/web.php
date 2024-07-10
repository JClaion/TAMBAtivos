<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/AdminScreen', function (){
    return view('admin.index');
});
