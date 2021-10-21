<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Suplier</h3></center>
    @foreach ($suplier as $data)
       <b>Nama Suplier : </b> {{$data->nama}} <br>
        <b>alamat : </b>{{$data->alamat}} <br>
        <b>Kode Pos : </b>{{$data->kode_pos}} <br>
        <b>Kota : </b> {{$data->kota}} <br> <hr>

    @endforeach
</body>
</html>
