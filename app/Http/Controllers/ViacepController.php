<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\ApiViacep;

class ViacepController extends Controller
{
    public function show(string $cep, string $formatResponse = 'json')
    {
        // Validate the CEP format
        // if (!preg_match('/^\d{5}-?\d{3}$/', $cep)) {
        //     return response()->json(['error' => 'Invalid CEP format'], 400);
        // }

        // Remove any non-numeric characters from the CEP
        // $cep = preg_replace('/\D/', '', $cep);

        // Call the ViaCEP API

        return ApiViacep::get("$cep/$formatResponse")->json();
    }
}
