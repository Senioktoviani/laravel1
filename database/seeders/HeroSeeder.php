<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            ['heroName' => 'Super Man', 'power' => 'Eye Laser & Wind', 'height' => 187, 'weight' => 75,
            'bornDate' => '1954-04-04'],
            ['heroName' => 'The Flash', 'power' => 'Quick & Thunder', 'height' => 170, 'weight' => 65,
            'bornDate' => '1970-04-04'],
        ];

        DB::table('heroes')->insert($hero);
    }
}
