@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-6">Profil Admin</h1>

<div class="bg-white p-6 rounded shadow-md max-w-lg">
    <div class="flex items-center gap-6">
        <img src="{{ asset('images/admin-avatar.png') }}" alt="Admin" class="w-24 h-24 rounded-full shadow">
        <div>
            <h2 class="text-xl font-semibold">{{ $admin->nama }}</h2>
            <p class="text-gray-500">{{ $admin->email }}</p>
            <p class="mt-2 text-blue-600 font-semibold">Peran: Super Admin</p>
        </div>
    </div>

    <hr class="my-6">

    <h3 class="text-lg font-bold mb-3">Ubah Password</h3>
    <form action="{{ url('/admin/profil/password') }}" method="POST" class="space-y-3">
        @csrf
        <input type="password" name="password_lama" placeholder="Password Lama" class="border p-2 w-full rounded" required>
        <input type="password" name="password_baru" placeholder="Password Baru" class="border p-2 w-full rounded" required>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Perubahan</button>
    </form>
</div>
@endsection
