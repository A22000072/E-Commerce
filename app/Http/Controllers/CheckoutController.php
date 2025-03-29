<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    /**
     * Tampilkan halaman checkout.
     */
    public function index()
    {
        $cart = auth()->user()->cart;
        $cartItems = $cart ? $cart->cartItems()->with('product')->get() : [];
        $totalPrice = $cartItems->sum(fn ($item) => $item->product->price * $item->quantity);

        return view('checkout.index', compact('cartItems', 'totalPrice'));
    }

    /**
     * Proses checkout.
     */
    public function store(Request $request)
    {
        $cart = auth()->user()->cart;

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja Anda kosong.');
        }

        // Buat pesanan baru
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $cart->cartItems->sum(fn ($item) => $item->product->price * $item->quantity),
            'status' => 'Pending',
        ]);

        // Tambahkan item ke pesanan
        foreach ($cart->cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        // Kosongkan keranjang
        $cart->cartItems()->delete();

        return redirect()->route('home')->with('success', 'Checkout berhasil. Pesanan Anda sedang diproses.');
    }
}
