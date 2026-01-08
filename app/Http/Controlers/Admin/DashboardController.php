<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Order; // ⬅️ TAMBAH INI

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalMenu' => Menu::count(),
            'totalCategory' => Category::count(),
            'totalOrder' => Order::count(), // ⬅️ TAMBAH INI
        ]);
    }
}
