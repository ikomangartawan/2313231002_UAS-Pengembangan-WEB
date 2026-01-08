<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create(Menu $menu)
    {
        return view('checkout.create', compact('menu'));
    }

   public function pay(Request $request)
{
    $validated = $request->validate([
        'menu_id' => 'required|exists:menus,id',
        'customer_name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        'paid' => 'required|integer|min:0',
    ]);

    $menu = Menu::find($validated['menu_id']);
    $total = $menu->price * $validated['quantity'];
    $change = $validated['paid'] - $total;
    if ($change < 0) $change = 0;

    $order = Order::create([
        'menu_id' => $validated['menu_id'],
        'customer_name' => $validated['customer_name'],
        'quantity' => $validated['quantity'],
        'total' => $total,
        'paid' => $validated['paid'],
        'change' => $change,
    ]);

    // 🔥 Return halaman sukses dengan data order
    return view('checkout.success', compact('order'));
}
}
