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



Route::get('/', \App\Http\Livewire\Counter::class)->name('counter');

Route::get('/calculator', \App\Http\Livewire\Calculator::class)->name('calculator');
Route::get('/todo-list', \App\Http\Livewire\TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Http\Livewire\CascadingDropdown::class)->name('cascading-dropdown');


Route::get('/products', \App\Http\Livewire\ProductsSearch::class)->name('products');
Route::get('/image-upload', \App\Http\Livewire\ImageUpload::class)->name('image-upload');
