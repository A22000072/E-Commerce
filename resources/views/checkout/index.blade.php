@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Checkout</h2>

    @if($cartItems->isNotEmpty())
        <div class="checkout-list">
            @foreach($cartItems as $item)
                <div class="checkout-item d-flex align-items-center mb-3">
                    <img src="{{ asset('images/' . $item->product->slug . '.jpg') }}" alt="{{ $item->product->name }}" class="checkout-item-img me-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="checkout-item-info flex-grow-1">
                        <h5 class="checkout-item-name">{{ $item->product->name }}</h5>
                        <p class="checkout-item-price mb-2">Harga: Rp{{ number_format($item->product->price, 0, ',', '.') }}</p>
                        <p class="checkout-item-quantity mb-0">Jumlah: {{ $item->quantity }}</p>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

        <div class="checkout-footer text-end mt-4">
            <h3>Total Belanja: Rp{{ number_format($totalPrice, 0, ',', '.') }}</h3>
            <form action="{{ route('checkout.store') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-success btn-lg">Lakukan Pembayaran</button>
            </form>
        </div>
    @else
        <p class="text-center text-muted">Keranjang belanja Anda kosong.</p>
        <div class="text-center mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali Belanja</a>
        </div>
    @endif
</div>
@endsection
