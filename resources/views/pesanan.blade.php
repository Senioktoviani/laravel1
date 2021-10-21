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
    @foreach ($pesanan as $data)
       <b>Nama Pelanggan : </b> {{$data->nama_pelanggan}} <br>
       <b>nama Barang : </b> {{$data->nama_barang}} <br>
        <b>Jumlah : </b>{{$data->qty}} <br>
        <b>Tanggal Pesan : </b>{{$data->tgl_pesan}} <br> <hr>
    @endforeach
</body>
</html>
