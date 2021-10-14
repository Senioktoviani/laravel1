<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($data as $data2)
            Id : {{$data2['id']}}<br>
            Nama : {{$data2['nama']}}<br>
            Username : {{$data2['username']}}<br>
            Email : {{$data2['email']}}<br>
            Alamat : {{$data2['alamat']}}<br>
            Mata Pelajaran : <br>
            @foreach ($data2['mapel'] as $mapel)
            <li>{{$mapel}}</li>

            @endforeach
            <hr>
            @endforeach
    </ul>
</body>
</html>
