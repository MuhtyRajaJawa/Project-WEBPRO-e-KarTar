<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | e-Karangtaruna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <div class="w-64 h-screen bg-blue-700 text-white fixed">
            <div class="p-4 text-2xl font-bold border-b border-blue-500">e-Karangtaruna</div>
            <ul class="mt-6 space-y-2">
                <li><a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-blue-500">🏠 Dashboard</a></li>
                <li><a href="{{ route('admin.anggota') }}" class="block py-2 px-4 hover:bg-blue-500">👥 Data Anggota</a></li>
                <li><a href="{{ route('admin.kegiatan') }}" class="block py-2 px-4 hover:bg-blue-500">📅 Kegiatan</a></li>
                <li><a href="{{ route('admin.keuangan') }}" class="block py-2 px-4 hover:bg-blue-500">💰 Keuangan</a></li>
                <li><a href="{{ route('admin.laporan') }}" class="block py-2 px-4 hover:bg-blue-500">📢 Laporan Warga</a></li>
                <li><a href="{{ route('admin.profil') }}" class="block py-2 px-4 hover:bg-blue-500">👤 Profil</a></li>
                <li><a href="{{ route('admin.logout') }}" class="block py-2 px-4 bg-red-600 hover:bg-red-700">🚪 Logout</a></li>
            </ul>
        </div>

        <!-- Konten Utama -->
        <div class="ml-64 p-6 w-full">
            @yield('content')
        </div>
    </div>

</body>
</html>
