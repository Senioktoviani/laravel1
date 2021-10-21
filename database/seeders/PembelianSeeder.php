<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => "Sabun", 'nama_supplier' => "Seni",
             'qty' => 11, 'tgl' => "2021-09-08"],
            ['nama_barang' => "Botol", 'nama_supplier' => "Seniseni",
            'qty' => 20 , 'tgl_pesan' => "2021-07-16"],
            ['nama_barang' => "Sabun", 'nama_supplier' => "Sen",
            'qty' => 50, 'tgl_pesan' => "2021-05-26"],
            ['nama_barang' => "Peralatan", 'nama_supplier' => "Senisen",
             'qty' => 15 ,'tgl_pesan' => "2021-10-09"],
            ['nama_barang' => "Peralatan", 'nama_supplier' => "Senini",
            'qty' => 15, 'tgl_pesan' => "2021-09-25"],
        ];

        DB::table('pembelians')->insert($pembelian);
    }
}
