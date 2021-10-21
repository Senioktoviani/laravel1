<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => "Seni", 'nama_barang' => "Sabun",
             'qty' => 11, 'tgl_pesan' => "2021-09-08"],
            ['nama_pelanggan' => "Seniseni", 'nama_barang' => "Botol",
            'qty' => 20 , 'tgl_pesan' => "2021-07-16"],
            ['nama_pelanggan' => "Sen", 'nama_barang' => "Sabun",
            'qty' => 50, 'tgl_pesan' => "2021-05-26"],
            ['nama_pelanggan' => "Senisen", 'nama_barang' => "Peralatan",
             'qty' => 15 ,'tgl_pesan' => "2021-10-09"],
            ['nama_pelanggan' => "senini", 'nama_barang' => "Peralatan",
            'qty' => 15, 'tgl_pesan' => "2021-09-25"],
        ];

        DB::table('pesanans')->insert($pesanan);
    }
}
