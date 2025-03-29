@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container py-5">
    <div class="row g-4 align-items-center">
        <!-- Product Image -->
        <div class="col-md-6">
            <div class="product-image text-center">
                <img src="{{ asset('images/' . $product->slug . '.jpg') }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <div class="product-details">
                <h1 class="product-title fw-bold mb-3">{{ $product->name }}</h1>
                <p class="product-price fs-3 fw-semibold">${{ number_format($product->price, 2) }}</p>
                <p class="product-description text-muted mb-4">
                    {{ $product->description }}
                </p>
                <!-- Add to Cart Form -->
                <form action="{{ route('cart.store') }}" method="POST" class="mt-3">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="additional-info p-4">
                <h3 class="fw-bold mb-3">Additional Information</h3>
                <p class="text-muted">
                    Any additional information about the product, such as shipping details, care instructions, or customer reviews.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
