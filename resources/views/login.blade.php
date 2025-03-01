<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun Siswa</title>
    
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center mb-4">Login Akun Siswa</h2>
        
        @if ($errors->any())
            <div class="text-red-600 text-sm mb-2">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nis" class="block text-sm font-medium">NIS</label>
                <input type="text" name="nis" id="nis" required class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required class="w-full p-2 border rounded">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</body>
</html>
