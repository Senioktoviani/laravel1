<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Barang</h3></center>
    @foreach ($barang as $data)
       <b>Nama Barang : </b> {{$data->nama}} <br>
       <b>Varian : </b> {{$data->varian}} <br>
        <b>Harga Beli : </b>{{$data->harga_beli}} <br>
        <b>Harga Jual : </b>{{$data->harga_jual}} <br> <hr>
    @endforeach
</body>
</html>
