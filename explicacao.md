# Funcionamento do Sistema de Locadora de Veículos com PHP e Bootstrap

Este documento descreve o funcionamento do Sistema de Locadora de Veículos desenvolvido em PHP, utilizando o Bootstrap para interface, com autenticação de usuários, gerenciamento de veículos (carros e motos) e persistência de dados em arquivos JSON. O foco principal é explicar o funcionamento geral do sistema, com ênfase especial nos perfis de acesso (admin e usuário).

## 1. Visão Geral do Sistema

O Sistema de Locadora de Veículos é uma aplicação web que permite:
- Autenticação de usuário com dois perfis:**admin** (administrador) e **usuário**;
- Gerenciamento de Veículos: Cadastro, aluguel, dvolução e exclusão;
- Cálculo de previsão de aluguel: com base no tipo de veículo (carro ou moto) e número de dias;
- Interface Responsiva.

Os dados são armazenados em dois arquivos JSON:
- `usuarios.json`: username, senha criptografada e perfil
- `veiculos.json`: tipo, modelo, placa e status de disponibilidade

## 2. Estrutura do Sistema

O sistmea utiliza:

- **PHP**: Para lógica
- **Bootstrap**: Para estilização
- **Bootstrap Icons**: Para os ícones da interface
- **Composer**: Para autoloading das classes
- **JSON**: Para persistência de dados (arquivos) 

### 2.1 Componentes principais

- **Interfaces**: Define a interface `Locavel` para veículos e utiliza os métodos `alugar()`, `devolver()` e `isDispoivel()`
- **Models**: Classes `Veiculos` (abstrata), `Carro` e `Moto` para os veículos, com cálculo de alguel baseado em diárias constantes (`DIARIA_CARRO` e `DIARIA_MOTO`)
- **Services**: Classes `AUTH` (autenticação e gerenciamento de usuários) e `Locadora` (gerenciamento dos veículos)
- **Views**: Template principal `template.php` para renderizar a interface e `login.php` para a autenticação
- **Controllers**: Lõgica em `index.php` para processar requisições e carregar o template.