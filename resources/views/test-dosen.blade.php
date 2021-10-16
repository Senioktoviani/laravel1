<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Dosen</h1></center>
    @foreach ($query as $item)
    <h2>{{$item->nipd}}</h2>
    <p>{{$item->nama}}</p>
    <p>{{$item->alamat}}</p>
       <hr>
    @endforeach
</body>
</html>
