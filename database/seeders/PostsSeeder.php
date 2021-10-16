<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => "Belajar Tajwid Menyenangkan", 'content' => "Lorem ipsum"],
            ['title' => "Bacaan Shalat", 'content' => "Lorem ipsum"],
            ['title' => "Juz Amma", 'content' => "Lorem ipsum"]
        ];

        //memasukan data ke dalam tabel "posts"
        DB::table('posts')->insert($post);
    }
}
