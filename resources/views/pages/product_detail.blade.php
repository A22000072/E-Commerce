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
                <a href="#" class="btn btn-dark btn-lg px-4">
                    <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                </a>
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
