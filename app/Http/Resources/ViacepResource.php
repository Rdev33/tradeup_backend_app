<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViacepResource extends JsonResource
{
    /**
     * transform the data to become standardized.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'CEP' => $this->resource['cep'] ?? null,
            'Logradouro' => $this->resource['logradouro'] ?? null,
            'Complemento' => $this->resource['complemento'] ?? null,
            'Unidade' => $this->resource['unidade'] ?? null,
            'Bairro' => $this->resource['bairro'] ?? null,
            'Cidade' => $this->resource['localidade'] ?? null,
            'UF' => $this->resource['uf'] ?? null,
            'Estado' => $this->resource['estado'] ?? null,
            'Regiao' => $this->resource['regiao'] ?? null,
            'IBGE' => $this->resource['ibge'] ?? null,
            'DDD' => $this->resource['ddd'] ?? null,
            'error' => $this->resource['erro'] ?? false,
            'message' => $this->resource['mensagem'] ?? null,
        ];
    }
}
