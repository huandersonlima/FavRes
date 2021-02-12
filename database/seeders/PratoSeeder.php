<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use App\Models\Prato;

use Illuminate\Database\Seeder;

class PratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Restaurante::all() as $res) {
        	
        	Prato::factory(2)->create([
        		'restaurante_id' => $res->id
        	]);
        }
    }
}
