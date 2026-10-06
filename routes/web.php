<?php

use App\Http\Controllers\KitchenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kitchen', [KitchenController::class, 'serveOrder']);