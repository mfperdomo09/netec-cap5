<?php

use App\Http\Controllers\Category\IndexController;
use App\Http\Controllers\Category\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function () {
    Route::get('/', IndexController::class);
    Route::post('/', StoreController::class);
    // Route::get('/{id}', 'Category\ShowController');
    // Route::put('/{id}', 'Category\UpdateController');
    // Route::delete('/{id}', 'Category\DestroyController');
});

Route::prefix('products')->group(function () {
    // Route::get('/', 'Product\IndexController');
    // Route::post('/', 'Product\StoreController');
    // Route::get('/{id}', 'Product\ShowController');
    // Route::put('/{id}', 'Product\UpdateController');
    // Route::delete('/{id}', 'Product\DestroyController');
});
