<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Tabel Pembeli</h3></center>
    @foreach ($pembeli as $data)
       <b>Nama Pembeli : </b> {{$data->nama}} <br>
       <b>Jenis Kelamin : </b> {{$data->jns_kelamin}} <br>
        <b>Alamat : </b>{{$data->alamat}} <br>
        <b>Kode Pos : </b>{{$data->kode_pos}} <br>
        <b>Kota : </b> {{$data->kota}} <br>
        <b>Tanggal Lahir : </b> {{$data->tgl_lahir}} <br> <hr>

    @endforeach
</body>
</html>
