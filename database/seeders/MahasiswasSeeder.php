<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            ['nim' => "09892836", 'nama' => "Seni Oktoviani", 'jurusan' => "RPL", 'wali' => "hgjdsgyu"],
            ['nim' => "86386823", 'nama' => "Senisen", 'jurusan' => "TKJ", 'wali' => "jhaudyuy"],
            ['nim' => "01624378", 'nama' => "Sensen", 'jurusan' => "TKRO", 'wali' => "hiuyuye"],
            ['nim' => "87368236", 'nama' => "Seniseni", 'jurusan' => "TBSM", 'wali' => "jkdeiuhe"],
            ['nim' => "98597363", 'nama' => "Senini", 'jurusan' => "FISIKA", 'wali' => "juieuyeg"],
        ];

 //memasukan data ke dalam tabel "dosens"
 DB::table('mahasiswas')->insert($mahasiswa);
    }
}
