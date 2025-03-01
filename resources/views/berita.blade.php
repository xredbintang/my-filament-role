<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Berita</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($berita as $item)
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('storage/' . $item->berita_gambar) }}" alt="{{ $item->berita_judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold">{{ $item->berita_judul }}</h2>
                    <p class="text-sm text-gray-600">{{ $item->berita_tanggal }}</p>
                    <a href="{{ route('berita.show', $item->id) }}" class="mt-2 inline-block text-blue-500">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
