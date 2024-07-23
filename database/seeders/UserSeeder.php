<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds. --> El unico trabajo de esta seeder es crear usuarios
     */
    public function run(): void
    {
        $user = new User();

        $user->name = "Maicol";
        $user->email = "mat@correo.com";
        $user->password = bcrypt("1234");

        $user->save();

        User::factory(100)->create();
    }
}
