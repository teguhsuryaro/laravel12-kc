<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
    @foreach ($data as $items)
        <li>
            <h3>{{ $items['nama'] }} - {{ $items['nilai'] }}</h3>
        </li>
    @endforeach
    </ul>
</body>
</html>