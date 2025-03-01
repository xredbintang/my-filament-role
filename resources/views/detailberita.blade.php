<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->berita_judul }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-4">
    <h1 class="text-3xl font-bold">{{ $berita->berita_judul }}</h1>
    <p class="text-gray-500">{{ $berita->berita_tanggal }}</p>
    <img src="{{ asset('storage/' . $berita->berita_gambar) }}" alt="{{ $berita->berita_judul }}" class="w-full my-4 rounded-lg">
    <div class="prose max-w-none">
        {!! nl2br(e($berita->berita_deskripsi)) !!}
    </div>
    <a href="{{ route('berita.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke Daftar Berita</a>
</body>
</html>
