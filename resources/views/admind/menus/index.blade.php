@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    <div class="flex justify-between mb-6">
        <h1 class="text-2xl font-bold">Daftar Menu</h1>

        <a href="{{ route('admin.menus.create') }}"
           class="bg-amber-600 text-white px-4 py-2 rounded">
            + Tambah Menu
        </a>
    </div>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3">Harga</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr class="border-t">
                <td class="p-3">{{ $menu->name }}</td>
                <td class="p-3">Rp {{ number_format($menu->price) }}</td>
                <td class="p-3 flex gap-3">
                    <a href="{{ route('admin.menus.edit', $menu) }}"
                       class="text-blue-600">Edit</a>

                    <form action="{{ route('admin.menus.destroy', $menu) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600"
                                onclick="return confirm('Hapus menu?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
