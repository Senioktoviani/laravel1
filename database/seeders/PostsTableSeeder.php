<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepet Nikah', 'contect' => 'lorem ipsum'],
            ['title' => 'Haruskah Menunda Menikah?', 'contect' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga', 'contect' => 'lorem ipsum']
        ];
        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
