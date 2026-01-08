@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">

    <h1 class="text-xl font-bold mb-4">Edit Menu</h1>

    <form action="{{ route('admin.menus.update', $menu) }}"
          method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $menu->name }}"
               class="w-full mb-3 border p-2">

        <input name="price" type="number" value="{{ $menu->price }}"
               class="w-full mb-3 border p-2">

        <select name="category_id" class="w-full mb-3 border p-2">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @selected($menu->category_id == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button class="bg-amber-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>

</div>
@endsection
