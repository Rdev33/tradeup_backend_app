<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\ApiViacep;
use App\Http\Resources\ViacepResource;
use Helper;

class ViacepController extends Controller
{
    /**
     * Query information about a ZIP code using the ViaCEP API.
     *
     * @param string $cep ZIP code to be consulted.
     * @return ViacepResource Returns standardized postal code data or error message.
     */
    public function show(string $cep): ViacepResource
    {
        if (!Helper::isValidCep($cep)) {
            return new ViacepResource([
                'erro' => true,
                'mensagem' => 'CEP inválido!'
            ]);
        }

        try {
            $response = ApiViacep::get("$cep/json")->json();

            if (isset($response['erro'])) {
                return new ViacepResource([
                    'erro' => true,
                    'mensagem' => 'CEP de formato válido, porém inexistente!'
                ]);
            }

            return new ViacepResource($response);
        } catch (\Exception $e) {
            return new ViacepResource([
                'erro' => true,
                'mensagem' => 'Erro ao buscar CEP: ' . $e->getMessage()
            ]);
        }
    }
}
