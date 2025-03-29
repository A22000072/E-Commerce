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
                        <h5>{{ $item->product->name }}</h5>
                        <p>Harga: Rp{{ number_format($item->product->price, 0, ',', '.') }}</p>
                        <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control w-25 d-inline">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                    <div>
                        <p>Total: Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</p>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        <div class="text-end mt-4">
            <h3>Total Belanja: Rp{{ number_format($totalPrice, 0, ',', '.') }}</h3>
            <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">Lanjutkan ke Pembayaran</a>
        </div>
    @else
        <p class="text-center">Keranjang Anda kosong. <a href="{{ route('products.index') }}">Belanja Sekarang!</a></p>
    @endif
</div>
@endsection
