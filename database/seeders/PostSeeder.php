<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Posts = new post();

        $Posts->title = "titulo 2";
        $Posts->content = "content 2";
        $Posts->categories = "categoria 2";
        $Posts->published_at = now();
        $Posts->is_active = "1";

        $Posts->save();

        post::factory(100)->create();
    }
}
