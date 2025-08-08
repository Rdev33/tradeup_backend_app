<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViacepController;

Route::middleware('throttle:60,1')->get('/viacep/{cep}', [ViacepController::class, 'show']);