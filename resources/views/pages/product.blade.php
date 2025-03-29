@extends('layouts.app')

@section('title', 'Catalog')

@section('content')
    <!-- Catalog Section -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Product Catalog</h1>
        <div class="row g-4">
            @forelse ($products as $product)
                <!-- Product Card -->
                <div class="col-md-4">
                    <a href="{{ route('product.detail', $product->slug) }}">
                        <div class="card product-card">
                            <img src="{{ asset('images/' . $product->slug . '.jpg') }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">${{ number_format($product->price, 2) }}</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center">No products available.</p>
            @endforelse
        </div>
    </div>
@endsection
