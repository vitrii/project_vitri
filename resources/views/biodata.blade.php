<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
<body>
    <h1>Selamat datang di halaman biodata</h1>
    <p>Nama :{{nama}}</p>
    <p>Jenis Kelamin :{{jenis_kelamin}}</p>
    <p>Alamat :{{alamat}}</p>
    <p>Pendidikan :{{pendidikan}}</p>
    <p>Pekerjaan :{{pekerjaan}}</p>


</head>
</body>
</html>
