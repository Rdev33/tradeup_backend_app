<?php
namespace Tests\Feature;

use Tests\TestCase;

class ViacepTest extends TestCase
{
    public function test_returns_valid_cep_data()
    {
        $cep = '01001000';

        $response = $this->getJson("/api/viacep/{$cep}");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'CEP',
                'Logradouro',
                'Complemento',
                'Unidade',
                'Bairro',
                'Cidade',
                'UF',
                'Estado',
                'Regiao',
                'IBGE',
                'DDD',
                'erro',
                'mensagem',
            ])
            ->assertJson([
                'erro' => false,
            ]);
    }

    public function test_returns_error_for_invalid_cep()
    {
        $cep = '123';

        $response = $this->getJson("/api/viacep/{$cep}");

        $response->assertStatus(200)
            ->assertJson([
                'erro' => true,
                'mensagem' => 'CEP inválido!'
            ]);
    }
}