<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class SeedContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $contatos = [
            [
                'nome' => 'Carlos Silva',
                'telefone' => '11987654321',
                'idade' => 30,
                'cep' => '01000-000',
                'rua' => 'Rua A',
                'numero' => '123',
                'complemento' => 'Apto 45',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Maria Oliveira',
                'telefone' => '11991234567',
                'idade' => 25,
                'cep' => '02000-000',
                'rua' => 'Rua B',
                'numero' => '456',
                'complemento' => 'Casa',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'João Pereira',
                'telefone' => '11993456789',
                'idade' => 40,
                'cep' => '03000-000',
                'rua' => 'Rua C',
                'numero' => '789',
                'complemento' => 'Apto 12',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Ana Costa',
                'telefone' => '11998765432',
                'idade' => 35,
                'cep' => '04000-000',
                'rua' => 'Rua D',
                'numero' => '321',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Lucas Santos',
                'telefone' => '11987654321',
                'idade' => 28,
                'cep' => '05000-000',
                'rua' => 'Rua E',
                'numero' => '654',
                'complemento' => 'Sala 10',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Fernanda Almeida',
                'telefone' => '11912345678',
                'idade' => 22,
                'cep' => '06000-000',
                'rua' => 'Rua F',
                'numero' => '987',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Ricardo Lima',
                'telefone' => '11923456789',
                'idade' => 50,
                'cep' => '07000-000',
                'rua' => 'Rua G',
                'numero' => '135',
                'complemento' => 'Apto 21',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Juliana Rocha',
                'telefone' => '11934567890',
                'idade' => 32,
                'cep' => '08000-000',
                'rua' => 'Rua H',
                'numero' => '246',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Paulo Martins',
                'telefone' => '11945678901',
                'idade' => 29,
                'cep' => '09000-000',
                'rua' => 'Rua I',
                'numero' => '369',
                'complemento' => 'Casa 3',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Tatiane Mendes',
                'telefone' => '11956789012',
                'idade' => 27,
                'cep' => '10000-000',
                'rua' => 'Rua J',
                'numero' => '147',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Fernando Silva',
                'telefone' => '11967890123',
                'idade' => 45,
                'cep' => '11000-000',
                'rua' => 'Rua K',
                'numero' => '258',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Cecília Oliveira',
                'telefone' => '11978901234',
                'idade' => 34,
                'cep' => '12000-000',
                'rua' => 'Rua L',
                'numero' => '369',
                'complemento' => 'Apto 2',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Gustavo Almeida',
                'telefone' => '11989012345',
                'idade' => 31,
                'cep' => '13000-000',
                'rua' => 'Rua M',
                'numero' => '147',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Isabela Santos',
                'telefone' => '11990123456',
                'idade' => 26,
                'cep' => '14000-000',
                'rua' => 'Rua N',
                'numero' => '258',
                'complemento' => '',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'Roberto Lima',
                'telefone' => '11901234567',
                'idade' => 33,
                'cep' => '15000-000',
                'rua' => 'Rua O',
                'numero' => '369',
                'complemento' => 'Casa 7',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
        ];

        foreach ($contatos as $contato) {
            DB::table('contatos')->insert($contato);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('contatos')->truncate();
    }
}
