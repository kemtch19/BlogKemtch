<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // post::factory(10)->create(); esto lo podemos utilizar de igual manera acá si solamente tenemos una línea en el seeder y no crearlo innecesariamente se quita del call y como solamente esta llamando a uno le quitamos los corchetes o no le mandamos el array

        $this->call([
            UserSeeder::class,
            PostSeeder::class
        ]);
    }
}
