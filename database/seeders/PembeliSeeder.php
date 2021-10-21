<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => "Sumarno", 'jns_kelamin' => "Laki-laki",
            'alamat' => "jakarta Barat", 'kode_pos' => 19827, 'kota' => "Jakarta",'tgl_lahir' => "2004-09-08"],
            ['nama' => "sumarni", 'jns_kelamin' => "Perempuan",
            'alamat' => "Dayeuhkolot",'kode_pos' => 19025 , 'kota' => "Bandung",'tgl_lahir' => "2003-07-16"],
            ['nama' => "Atep", 'jns_kelamin' => "Laki-laki",
            'alamat' => "Balaendah",'kode_pos' => 12093, 'kota' => "Bogor",'tgl_lahir' => "2002-05-26"],
            ['nama' => "Atun", 'jns_kelamin' => "Perempuan",
            'alamat' => "Cangkuang",'kode_pos' => 20219 ,'kota' => "Jawa",'tgl_lahir' => "2001-10-09"],
            ['nama' => "angga", 'jns_kelamin' => "Laki-laki",
            'alamat' => "Cibaduyut",'kode_pos' => 29301, 'kota' => "Bojong",'tgl_lahir' => "2004-09-25"],
        ];

        DB::table('pembelis')->insert($pembeli);
    }
}
