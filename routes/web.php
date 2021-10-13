<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('about', function(){
    return '<h1>Hello</h1>'
            .'<br>Selamat datang di webbapp saya'
            .'<br>laravel, emang keren';

});

route::get('profile', function(){
    $nama = "Seni";
    return "Nama Saya adalah <b>$nama</b>";
});

//route parameter
Route::get('post/{id}', function($a){
    return "Halaman Post ke - $a";
});


Route::get('bio/{nama}/{umur}/{alamat}', function($n,$u,$a){
    return "Nama Saya : $n
            <br>Umur saya : $u
            <br>Alamat Saya : $a";
});

//route optional parameter
Route::get('page/{page?}',function($hal = 1){
    return "Halaman <b>$hal</b>";
});


route::get('pesan/{makan?}/{minum?}/{cemilan?}',
    function ($a = null, $b = null, $c = null){
    if ($a == null && $b == null && $c == null){
        $pesan = "Anda Tidak Pesan, Silahkan Pulang!";
    }
    if ($a != null) {
        $pesan = "Anda Memesan"
            . "<br>Makanan : <b>$a</b>"; 
    }
    if ($a != null && $b != null){
        $pesan = "Anda Memesan"
        . "<br>Makanan : <b>$a</b>"
        . "<br>Minuman : <b>$b</b>";
    }
    if ($a != null && $b != null && $c != null){
        $pesan = "Anda Memesan"
        . "<br>Makanan : <b>$a</b>"
        . "<br>Minuman : <b>$b</b>"
        . "<br>Cemilan : <b>$c</b>";
    }
    return $pesan;
    });