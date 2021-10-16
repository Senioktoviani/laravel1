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

Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Seni Oktoviani";
    return view('profile', compact('nama'));
});

Route::get('biodata', function(){
    $nama = "Seni Oktoviani";
    $umur = "17 Tahun";
    $alamat = "Kp.Sindangpalay";
    $sekolah = "SMK ASSALAAM BANDUNG";
    $kelas = "XII RPL 1";
    $hobi = "Traveling";

    return view('biodata', compact('nama','umur','alamat', 'sekolah','kelas','hobi'));
});

Route::get('post/{id}', function ($a) {
    return view('post', ['posting' => $a]);
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a, $b, $c) {
   return view('bio', compact('a','b','c'));
});


Route::get('blog', function (){
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'contect' => 'Contect Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'contect' => 'Contect Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'contect' => 'Contect Ketiga']
    ];
    return view('blog', compact('posts'));
});


Route::get('format', function(){
    $data = [
        ['id' => 1, 'nama' => 'Seni oktoviani', 'username' => 'Senioktoviani', 'email' => 'Seni@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Fisika',
            'mapel3' => 'Matematika'
        ]],
        ['id' => 2, 'nama' => 'Sensen', 'username' => 'Sensen', 'email' => 'Sensen@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Fisika',
            'mapel3' => 'Matematika'
        ]],
        ['id' => 3, 'nama' => 'Senisen', 'username' => 'Senisen', 'email' => 'Senisen@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Fisika',
            'mapel3' => 'Matematika'
        ]],
        ['id' => 4, 'nama' => 'Seniseni', 'username' => 'Seniseni', 'email' => 'Seniseni@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Fisika',
            'mapel3' => 'Matematika'
        ]],
        ['id' => 5, 'nama' => 'Senisenisen', 'username' => 'Senisenisen', 'email' => 'Senisenisen@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Fisika',
            'mapel3' => 'Matematika'
        ]],
    ];
    return view('format', compact('data'));
});

Route::get('page/{id?}', function ($a = 1) {
    return "Halaman post ke - $a";
});

Route::get('pesan/{ma?}/{mi?}/{ce?}', function ($a = null, $b = null, $c = null) {

    if ($a == null && $b == null && $c == null) {
        $isi = "Anda Tidak Memesan, Silahkan Pulang";
    }
    if ($a != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a";
    }
    if ($a != null && $b != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a <br>
                Minuman : $b";
    }
    if ($a != null && $b != null && $c != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a <br>
                Minuman : $b <br>
                Cemilan : $c <br>";
    }return $isi;
});

Route::get('/testmodel', function(){
    $query = App\Models\Post::all();
    return $query;
});

Route::get('/testmodel2', function(){
    $query = App\Models\Post::find(1);
    return $query;
});

Route::get('/testmodel3', function(){
    $query = App\Models\Post::where('title', 'like', '%Bacaan Shalat%')->get();
    return $query;
});

Route::get('/testmodel4', function(){
    $query = App\Models\Post::find(1);
    $query-> title = "Ciri Anak Sholeh";
    $query->save();
      return $query;
});

Route::get('/testmodel5', function() {
    $post = App\Models\Post::find(7);
    $post->delete();

 });

    Route::get('/testmodel6', function() {
    $post = new App\Models\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;

    });

    Route::get('/test-post', function(){
        $query = App\Models\Post::all();
        return view('test-post', compact('query'));
    });

    Route::get('/test-dosen', function(){
        $query = App\Models\Dosen::all();
        return view('test-dosen', compact('query'));
    });

    Route::get('/test-mahasiswa', function(){
        $query = App\Models\Mahasiswa::all();
        return view('test-mahasiswa', compact('query'));
    });

