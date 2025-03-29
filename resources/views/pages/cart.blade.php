@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="cart-container">
    <h2>Keranjang Belanja</h2>
    <div class="cart-list">
        <!-- Item Cart -->
        <div class="cart-item">
            <img src="{{ asset('images/product6.jpg') }}" alt="Product Image" class="cart-item-img">
            <div class="cart-item-info">
                <h3 class="cart-item-name">Nama Produk</h3>
                <p class="cart-item-price">Harga: Rp50.000</p>
                <p class="cart-item-quantity">Jumlah: 2</p>
            </div>
            <div class="cart-item-total">
                <p>Total: Rp100.000</p>
            </div>
            <button class="cart-item-remove">Hapus</button>
        </div>

        <!-- Item Cart -->
        <div class="cart-item">
            <img src="{{ asset('images/product3.jpg') }}" alt="Product Image" class="cart-item-img">
            <div class="cart-item-info">
                <h3 class="cart-item-name">Produk Lain</h3>
                <p class="cart-item-price">Harga: Rp75.000</p>
                <p class="cart-item-quantity">Jumlah: 1</p>
            </div>
            <div class="cart-item-total">
                <p>Total: Rp75.000</p>
            </div>
            <button class="cart-item-remove">Hapus</button>
        </div>
    </div>
    <div class="cart-footer">
        <h3>Total Belanja: Rp175.000</h3>
        <button class="checkout-btn">Lanjutkan ke Pembayaran</button>
    </div>
</div>
@endsection