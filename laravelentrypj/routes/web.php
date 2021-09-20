<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;

Route::get('/building', [BuildingController::class, 'index_01']);
Route::get('/building/{msg?}', [BuildingController::class, 'index_02']);