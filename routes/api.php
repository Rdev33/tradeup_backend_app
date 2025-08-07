<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViacepController;

Route::get('/viacep/{cep}', [ViacepController::class, 'show']);