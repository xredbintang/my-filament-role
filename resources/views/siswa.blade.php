<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <h2 class="text-2xl font-bold mb-4">Selamat Datang, {{ Session::get('siswa_nama') }}</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-red-500 text-white p-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
