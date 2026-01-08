@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-16">

    <h1 class="text-3xl font-extrabold text-amber-700 mb-8">
        Dashboard Admin
    </h1>

    <!-- DEBUG (boleh hapus nanti) -->
    <p class="text-sm text-red-500 mb-4">
        DEBUG ORDER: {{ $totalOrder }}
    </p>

    <div class="grid md:grid-cols-3 gap-6 mb-10">

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Total Menu</h3>
            <p class="text-3xl font-bold text-amber-600">
                {{ $totalMenu }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Total Kategori</h3>
            <p class="text-3xl font-bold text-amber-600">
                {{ $totalCategory }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Total Pesanan</h3>
            <p class="text-3xl font-bold text-amber-600">
                {{ $totalOrder }}
            </p>
        </div>

    </div>

    <a href="{{ route('admin.menus.index') }}"
       class="bg-amber-600 text-white px-6 py-3 rounded shadow hover:bg-amber-700">
        Kelola Menu
    </a>

</div>
@endsection
