@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Keranjang Belanja</h2>
    @if($cartItems->isNotEmpty())
        <div class="cart-list">
            @foreach($cartItems as $item)
                <div class="cart-item d-flex align-items-center mb-3">
                    <img src="{{ asset('images/' . $item->product->slug . '.jpg') }}" alt="{{ $item->product->name }}" class="cart-item-img me-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="cart-item-info flex-grow-1">
                        <h5 class="cart-item-name">{{ $item->product->name }}</h5>
                        <p class="cart-item-price mb-2">Harga: Rp{{ number_format($item->product->price, 0, ',', '.') }}</p>
                        <p class="cart-item-quantity mb-0">Jumlah: {{ $item->quantity }}</p>
                    </div>
                    <div class="cart-item-total text-end me-3">
                        <p>Total: Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</p>
                    </div>
                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="cart-footer text-end mt-4">
            <h3>Total Belanja: Rp{{ number_format($totalPrice, 0, ',', '.') }}</h3>
            <a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg mt-3">Lanjutkan ke Pembayaran</a>
        </div>
    @else
        <p class="text-center text-muted">Keranjang belanja Anda kosong.</p>
        <div class="text-center mt-4">
            <a href="{{ route('product.index') }}" class="btn btn-primary">Kembali Belanja</a>
        </div>
    @endif
</div>
@endsection
