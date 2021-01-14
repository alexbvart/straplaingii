<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Alexander Briones',
            'email' => 'alexanderbvart@gmail.com',
            'password' => bcrypt('alexx123'), // password
        ]);

        App\Reponsibility::create([
            'type' => 'Responsabilidad mayor' 
        ]);
        App\Reponsibility::create([
            'type' => 'Participacion mayor en el proceso' 
        ]);
        App\Reponsibility::create([
            'type' => 'Alguna participacion en el proceso' 
        ]);
        App\Reponsibility::create([
            'type' => 'Ninguna participacion en el procesor' 
        ]);
    }
}
