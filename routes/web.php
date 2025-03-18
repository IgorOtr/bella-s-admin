<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'listProducts'])->name('listProducts');

Route::group(['prefix' => 'Produtos'], function(){

    Route::get('/fill-in', [ProductController::class, 'TofillIn'])->name('products-TofillIn');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('deleteProduct');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editProduct');
    Route::post('/update', [ProductController::class, 'update'])->name('updateProduct');
    Route::post('/create', [ProductController::class, 'create'])->name('product-create');
});

Route::group(['prefix' => 'Vendas'], function(){

    Route::get('/fill-in', [VendaController::class, 'TofillIn'])->name('vendas-TofillIn');
});

Route::group(['prefix' => 'Categoria'], function(){

    Route::get('/fill-in', [CategoriaController::class, 'index'])->name('categoria-index');
});

