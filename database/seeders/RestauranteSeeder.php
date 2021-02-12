<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use App\Models\User;
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
    	$users = User::all();
    	foreach ($users as $user) {
        Restaurante::factory(5)->create([
        	'user_id' => $user->id
        ]);
    	}
    }
}
