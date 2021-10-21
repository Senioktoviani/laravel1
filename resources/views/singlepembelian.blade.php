<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Pembelian</h3></center>
       <b>Nama Barang : </b> {{$pembelians->nama_barang}} <br>
       <b>nama Supplier : </b> {{$pembelians->nama_supplier}} <br>
        <b>Jumlah : </b>{{$pembelians->qty}} <br>
        <b>Tanggal Pesan : </b>{{$pembelians->tgl}} <br> <hr>
</body>
</html>
