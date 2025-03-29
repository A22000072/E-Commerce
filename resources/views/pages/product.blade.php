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
                                <p class="card-text">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                
                                <!-- Add to Cart Form -->
                                <form action="{{ route('cart.store') }}" method="POST" class="mt-3">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
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
