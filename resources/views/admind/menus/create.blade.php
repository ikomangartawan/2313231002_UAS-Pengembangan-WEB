@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">

    <h1 class="text-xl font-bold mb-4">Tambah Menu</h1>

    <form action="{{ route('admin.menus.store') }}" method="POST"
          class="bg-white p-6 rounded shadow">
        @csrf

        <input name="name" placeholder="Nama Menu"
               class="w-full mb-3 border p-2">

        <input name="price" type="number" placeholder="Harga"
               class="w-full mb-3 border p-2">

        <select name="category_id" class="w-full mb-3 border p-2">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button class="bg-amber-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>

</div>
@endsection
