<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\pembelian;
use App\Models\pembeli;
use App\Models\suplier;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test()
    {
    $result = "<h1>Test Controller</h1>";
    return view('test', compact('result'));
    }

    public function heroes()
    {
    $hero = Hero::all();
    return view('hero', compact('hero'));
    }

    public function barang()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }
    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
    public function pembeli()
    {
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }
    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
    public function suplier()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }

    //pake parameter
    public function barangs($id)
    {
        $barangs = Barang::findOrfail($id);
        return view('singlebarang', compact('barangs'));
    }
    public function pesanans($id)
    {
        $pesanans = Pesanan::findOrfail($id);
        return view('singlepesanan', compact('pesanans'));
    }
    public function pembelis($id)
    {
        $pembelis = Pembeli::findOrfail($id);
        return view('singlepembeli', compact('pembelis'));
    }
    public function pembelians($id)
    {
        $pembelians = Pembelian::findOrfail($id);
        return view('singlepembelian', compact('pembelians'));
    }
    public function supliers($id)
    {
        $supliers = Suplier::findOrfail($id);
        return view('singlesuplier', compact('supliers'));
    }
}
