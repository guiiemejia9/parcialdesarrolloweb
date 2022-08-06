<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Libros')->group(function () {
    Route::get('/agregar', [BooksController::class, 'create'])->name('books-add');
    Route::get('/visualizar', [BooksController::class, 'index'])->name('books-visualize');
    Route::post('/crear', [BooksController::class, 'store'])->name('books-create');
    Route::delete('/eliminar/{id}', [BooksController::class, 'delete'])->name('books-delete');
    //Route::get('/editar/{id}', [BooksController::class, 'edit'])->name('books-edit');
    //Route::PUT('/actualizar/{id}', [BooksController::class, 'update'])->name('books-update');
});
