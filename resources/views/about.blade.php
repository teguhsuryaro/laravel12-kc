<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>halo mamang, nama saya {{ $nama }}, umur saya {{ $umur }} tahun</h1>
    @if ($umur > 18)
        <h3>You bisa Vote Presiden in Pemilu</h3>
    @else
        <h3>You gabisa Vote Presiden in Pemilu</h3>
    @endif
</body>
</html>