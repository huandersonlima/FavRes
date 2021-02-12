<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Restaurante::create([
        	'nome' => 'Dona xepa',
        	'imagem' => 'asdsada',
        	'endereco' => 'rua 2, 223',
        	'user_id' => 1
        ]);
    }
}
