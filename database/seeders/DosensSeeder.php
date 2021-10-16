<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            ['nipd' => "09892836", 'nama' => "Ute Juli Kurnia", 'alamat' => "Bandung"],
            ['nipd' => "86386823", 'nama' => "Kang Candra", 'alamat' => "Bandung"],
            ['nipd' => "01624378", 'nama' => "Kang Mulki", 'alamat' => "Bandung"],
            ['nipd' => "87368236", 'nama' => "Kang Bayu", 'alamat' => "Bandung"],
            ['nipd' => "98597363", 'nama' => "Pa Wildan", 'alamat' => "Bandung"],
        ];

 //memasukan data ke dalam tabel "dosens"
 DB::table('dosens')->insert($dosen);
    }

}
