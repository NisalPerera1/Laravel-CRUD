<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

//initial route for welcome.blade.php
Route::get('/', function () {
    return view('Items.welcome');
});

//made route for items through controller resource 
Route :: resource('items',ItemController::class);
//Did not specified any function in ItemController .default 'index' function will be accesed


//for edit dont need to specify the below code.this is optional
Route::get('items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/about', function () {
    return view('Items.about');
});