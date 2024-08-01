<?php

use App\Http\Controllers\Category\DeleteController;
use App\Http\Controllers\Category\ShowController;
use App\Http\Controllers\Category\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function () {
    // Route::get('/', 'Category\IndexController');
    // Route::post('/', 'Category\StoreController');
    Route::get('/{id}', ShowController::class);
    Route::put('/{id}', UpdateController::class);
    Route::delete('/{id}', DeleteController::class);
});

Route::prefix('products')->group(function () {
    // Route::get('/', 'Product\IndexController');
    // Route::post('/', 'Product\StoreController');
    // Route::get('/{id}', 'Product\ShowController');
    // Route::put('/{id}', 'Product\UpdateController');
    // Route::delete('/{id}', 'Product\DestroyController');
});
