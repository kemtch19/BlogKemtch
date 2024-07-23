<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User();

        $user -> name = "Maicol";
        $user -> email = "mat@correo.com";
        $user -> password = bcrypt("1234");

        $user -> save();
    }
}
