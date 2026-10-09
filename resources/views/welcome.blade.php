<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Laravel</title>
</head>
<body>
    <h1>Selamat Datang, {{ $name }}!</h1>

    <p>Ini adalah halaman beranda Laravel saya.</p>

    <h2>Daftar Mata Kuliah</h2>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course }}</li>
        @endforeach
    </ul>

    <nav>
        <a href="/about">About</a> |
        <a href="/contact">Contact</a> |
        <a href="/products">Products</a>
    </nav>
</body>
</html>