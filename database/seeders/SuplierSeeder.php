<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => "Sukinah",'alamat' => "jakarta Barat", 'kode_pos' => 19827,
            'kota' => "Jakarta"],
            ['nama' => "Maemunah",'alamat' => "Dayeuhkolot",'kode_pos' => 19025 ,
            'kota' => "Bandung"],
            ['nama' => "Bambang", 'alamat' => "Balaendah",'kode_pos' => 12093,
            'kota' => "Bogor"],
            ['nama' => "Ahmad", 'alamat' => "Cangkuang",'kode_pos' => 20219 ,
            'kota' => "Jawa"],
            ['nama' => "Sitinur", 'alamat' => "Cibaduyut",'kode_pos' => 29301,
            'kota' => "Bojong"],
        ];

        DB::table('supliers')->insert($suplier);
    }
}
