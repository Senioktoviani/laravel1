<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Pesanan</h3></center>
       <b>Nama Pelanggan : </b> {{$pesanans->nama_pelanggan}} <br>
       <b>nama Barang : </b> {{$pesanans->nama_barang}} <br>
        <b>Jumlah : </b>{{$pesanans->qty}} <br>
        <b>Tanggal Pesan : </b>{{$pesanans->tgl_pesan}} <br> <hr>
</body>
</html>
