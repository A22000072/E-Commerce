@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="container my-5">
    <div class="row g-4">
        <!-- Product Image -->
        <div class="col-md-6">
            <div class="product-image">
                <img src="{{ asset('images/product1.jpg') }}" class="img-fluid rounded" alt="Product Image">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <div class="product-details">
                <h1 class="product-title">Product Name</h1>
                <p class="product-price text-muted fs-4">$49.99</p>
                <p class="product-description">
                    This is a detailed description of the product. It highlights the key features, specifications, and benefits of the product. Perfect for those who want quality and value.
                </p>
                <p class="product-stock">
                    <span class="badge bg-success">In Stock</span> <!-- Or use "Out of Stock" with bg-danger -->
                </p>

                <div class="mt-4">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Additional Information</h3>
            <p>
                This section can include any additional information about the product, such as shipping details, care instructions, or customer reviews.
            </p>
        </div>
    </div>
</div>
@endsection