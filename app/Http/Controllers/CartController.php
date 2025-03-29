<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil keranjang pengguna
        $cart = auth()->user()->cart()->firstOrCreate();

        // Tambahkan produk ke dalam keranjang
        $cartItem = $cart->cartItems()->updateOrCreate(
            ['product_id' => $validated['product_id']],
            ['quantity' => \DB::raw("quantity + {$validated['quantity']}")]
        );

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu untuk mengakses keranjang.');
        }
        $cart = auth()->user()->cart;
        $cartItems = $cart ? $cart->cartItems()->with('product')->get() : [];
        $totalPrice = $cartItems->sum(fn ($item) => $item->product->price * $item->quantity);

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }

    /**
     * Hapus item dari keranjang.
     */
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
