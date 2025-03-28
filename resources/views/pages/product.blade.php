@extends('layouts.app')

@section('title', 'Catalog')

@section('content')
    <!-- Catalog Section -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Product Catalog</h1>
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product1.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">$49.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </a>
            </div>
    
            <!-- Product Card 2 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product2.jpg') }}" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$59.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </a>
            </div>
    
            <!-- Product Card 3 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product3.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </a>
            </div>
    
            <!-- Product Card 4 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product4.jpg') }}" class="card-img-top" alt="Product 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 4</h5>
                        <p class="card-text">$29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </a>
            </div>
    
            <!-- Product Card 5 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product5.jpg') }}" class="card-img-top" alt="Product 5">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 5</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </a>
            </div>
    
            <!-- Product Card 6 -->
            <div class="col-md-4">
                <a href="/product_detail">
                <div class="card product-card">
                    <img src="{{ asset('images/product6.jpg') }}" class="card-img-top" alt="Product 6">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product 6</h5>
                        <p class="card-text">$99.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    


@endsection
