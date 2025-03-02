<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 p-4 md:p-8 lg:p-12">
    <div class="max-w-7xl mx-auto">

        {{-- Bagian Gambar dan Deskripsi Singkat --}}
        <div class="flex flex-col md:flex-row md:space-x-12 space-y-8 md:space-y-0">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('storage/' . $boi->gambar) }}" alt="Tentang Kami"
                    class="w-full h-auto md:h-[500px] rounded-3xl object-cover shadow-2xl">
            </div>
            <div class="flex flex-col space-y-6 md:space-y-10 justify-center w-full md:w-1/2">
                <h3 class="text-[#0A3974] text-3xl md:text-[35px] font-semibold">Tentang Kami</h3>
                <div class="text-base text-gray-700 prose max-w-none">
                    {!! $boi->deskripsi !!}
                </div>
                <button
                    class="p-3 flex items-center justify-center bg-[#E9B404] hover:bg-[#c99803] transition-colors text-white font-semibold rounded-2xl w-[200px] text-[16px]">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Visi Misi --}}
        <div class="mt-12 bg-white p-8 rounded-3xl shadow-lg prose">
            <h2 class="text-[#0A3974] text-3xl md:text-[35px] font-bold text-center mb-6">Visi, Misi & Tujuan</h2>

            <div class="mb-8">
                <h3 class="text-xl font-semibold text-[#0A3974]">Visi</h3>
                <p class="text-gray-700 mt-2">{!! $visi->visi !!}</p>
            </div>

            <div class="mb-8">
                <h3 class="text-xl font-semibold text-[#0A3974]">Misi</h3>
                <div class="text-base text-gray-700 prose max-w-none">{!! $visi->misi !!}</div>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-[#0A3974]">Tujuan</h3>
                <p class="text-gray-700 mt-2">{!! $visi->tujuan !!}</p>
            </div>
        </div>

        {{-- Ekstrakurikuler Wajib --}}
        <div class="mt-12">
            <h2 class="text-[#0A3974] text-2xl font-semibold mb-4">Ekstrakurikuler Wajib</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($ekstraWajib as $ekstra)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $ekstra->ekstra_gambar) }}" alt="{{ $ekstra->ekstra_nama }}"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold">{{ $ekstra->ekstra_nama }}</h3>
                        <p class="text-gray-700 mt-2">{{ $ekstra->ekstra_deskripsi }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Ekstrakurikuler Pilihan --}}
        <div class="mt-12">
            <h2 class="text-[#0A3974] text-2xl font-semibold mb-4">Ekstrakurikuler Pilihan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($ekstraPilihan as $ekstra)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $ekstra->ekstra_gambar) }}" alt="{{ $ekstra->ekstra_nama }}"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold">{{ $ekstra->ekstra_nama }}</h3>
                        <p class="text-gray-700 mt-2">{{ $ekstra->ekstra_deskripsi }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Fasilitas Sekolah --}}
        <div class="mt-12">
            <h2 class="text-[#0A3974] text-2xl font-semibold mb-4">Fasilitas Sekolah</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($fasilitas as $item)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $item->fasilitas_gambar) }}" alt="{{ $item->fasilitas_nama }}"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold">{{ $item->fasilitas_nama }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kegiatan Sekolah --}}
        <div class="mt-12">
            <h2 class="text-[#0A3974] text-2xl font-semibold mb-4">Kegiatan Sekolah</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($kegiatan as $item)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $item->kegiatan_gambar) }}" alt="{{ $item->kegiatan_nama }}"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-semibold">{{ $item->kegiatan_nama }}</h3>
                        <p class="text-gray-700 mt-2">{{ $item->kegiatan_deskripsi }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <h2 class="text-2xl font-bold text-[#0A3974] mb-6">Data Kelas dan File PDF</h2>

        @foreach ($dataMurid as $data)
        <div class="mb-8 border-b pb-6">
            <h3 class="text-xl font-semibold text-gray-800">{{ $data->data_kelas }}</h3>
    
            <div class="mt-4 space-y-4">
                @if (is_array($data->data_files))
                    @foreach ($data->data_files as $file)
                        @php
                            $fileUrl = Storage::disk('public')->url($file);
                        @endphp
                        
                        <object
                            data="{{ $fileUrl }}"
                            type="application/pdf"
                            class="w-full h-96 border rounded-lg shadow-sm"
                        >
                            <p>
                                Browser Anda tidak mendukung tampilan PDF secara langsung.
                                <a href="{{ $fileUrl }}" target="_blank" class="text-blue-600 hover:underline">
                                    Klik di sini untuk mengunduh PDF
                                </a>
                            </p>
                        </object>
                    @endforeach
                @else
                    <p class="text-red-500">Tidak ada file yang tersedia.</p>
                @endif
            </div>
        </div>
    @endforeach

    </div>
</body>
</html>
