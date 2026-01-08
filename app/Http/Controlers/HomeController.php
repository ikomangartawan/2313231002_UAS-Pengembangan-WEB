<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil kategori + menu di dalamnya
        $categories = Category::with('menus')->get();

        return view('home', compact('categories'));
    }
}
