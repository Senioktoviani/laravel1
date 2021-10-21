<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => "Rinso", 'varian' => "Sabun",
             'harga_beli' => 1000, 'harga_jual' => 1500],
            ['nama' => "Kecap", 'varian' => "Botol",
            'harga_beli' => 2000 , 'harga_jual' => 2500],
            ['nama' => "Sampo", 'varian' => "Sabun",
            'harga_beli' => 500, 'harga_jual' => 1000],
            ['nama' => "Pulpen", 'varian' => "Peralatan",
             'harga_beli' => 1500 ,'harga_jual' => 2000],
            ['nama' => "Pensil", 'varian' => "Peralatan",
            'harga_beli' => 1500, 'harga_jual' => 2000],
        ];

        DB::table('barangs')->insert($barang);
    }
}
