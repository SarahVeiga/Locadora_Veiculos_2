<?php
namespace Services;

use Models\{Veiculo, Carro, Moto};

// Classe para gerenciar a Locação
class Locadora {
    private array $veiculos = [];

    public function __construct()
    {
        $this->carregarVeiculo();
    }

    private function carregarVeiculo(): void {
        if (file_exists(ARQUIVO_JSON)){

            // Decodifica o arquivo JSON
        }
    }
}