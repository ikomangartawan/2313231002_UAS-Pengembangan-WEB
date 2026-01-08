<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;

class OrderController extends Controller
{
    // Menampilkan form checkout
    public function create($menuId)
    {
        $menu = Menu::findOrFail($menuId);
        return view('checkout.create', compact('menu'));
    }

    // Proses pembayaran
    public function pay(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'customer_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'paid' => 'required|integer|min:0',
        ]);

        $menu = Menu::findOrFail($request->menu_id);
        $total = $menu->price * $request->quantity;
        $change = $request->paid - $total;

        Order::create([
            'menu_id' => $menu->id,
            'customer_name' => $request->customer_name,
            'quantity' => $request->quantity,
            'total' => $total,
            'paid' => $request->paid,
            'change' => $change > 0 ? $change : 0
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil! Total: Rp ' . $total . ', Kembalian: Rp ' . ($change > 0 ? $change : 0));
    }
}
