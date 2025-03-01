<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visi Misi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 p-4 md:p-8 lg:p-12">
    <div class="max-w-7xl mx-auto">
        {{-- Bagian Gambar dan Deskripsi Singkat --}}
        <div class="flex flex-col md:flex-row md:space-x-12 space-y-8 md:space-y-0">
            <div class="w-full md:w-1/2">
                <img src="{{ asset('storage/' . $boi->gambar) }}" alt="Tentang Kami" class="w-full h-auto md:h-[500px] rounded-3xl object-cover shadow-2xl">
            </div>
            <div class="flex flex-col space-y-6 md:space-y-10 justify-center w-full md:w-1/2">
                <h3 class="text-[#0A3974] text-3xl md:text-[35px] font-semibold">Tentang Kami</h3>
                <div class="text-base text-gray-700 prose max-w-none">
                    {!! $boi->deskripsi !!}
                </div>
                <button class="p-3 flex flex-row items-center justify-center bg-[#E9B404] hover:bg-[#c99803] transition-colors text-white font-semibold rounded-2xl w-[200px] text-[16px]">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

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
    </div>
</body>
</html>
