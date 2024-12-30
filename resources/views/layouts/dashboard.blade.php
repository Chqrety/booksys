<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Menggunakan Vite untuk CSS dan JS -->
</head>

<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <div class="h-screen w-64 bg-gray-800 text-white">
            <div class="p-6">Dashboard</div>
            <ul>
                <li><a class="block p-4" href="{{ route('dashboard') }}">Home</a></li>
                {{-- <li><a class="block p-4" href="{{ route('users.index') }}">Users</a></li>
                <li><a class="block p-4" href="{{ route('books.index') }}">Books</a></li> --}}
                <!-- Tambahkan menu lain sesuai kebutuhan -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="rounded-lg bg-white p-6 shadow-md">
                @yield('content') <!-- Tempat konten halaman dinamis -->
            </div>
        </div>
    </div>

</body>

</html>
