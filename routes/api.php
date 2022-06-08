<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatalogApiController;
use App\Http\Controllers\Api\MovieApiController;



Route::get('/catalog', [CatalogApiController::class, 'index']);
Route::post('/store',[CatalogApiController::class, 'store']);
Route::post('/create/movie', [MovieApiController::class, 'store']);
Route::get('/movie/{id}', [MovieApiController::class, 'show']);

