@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header class="masthead" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/banner.jpg') }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4">Welcome to Lora</h1>
                <p class="lead">Discover the best deals on quality products tailored just for you.</p>
                <a href="{{ url('/product') }}" class="btn btn-primary btn-lg">Shop Now</a>
            </div>
        </div>
    </div>
</header>

<section class="categories py-5">
    <div class="container">
        <h2 class="text-center mb-4">Explore Categories</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card category-card">
                    <img src="{{ asset('images/product1.jpg') }}" class="card-img-top" alt="Electronics">
                    <div class="card-body text-center">
                        <h5 class="card-title">Electronics</h5>
                        <a href="{{ url('/categories/electronics') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card category-card">
                    <img src="{{ asset('images/product2.jpg') }}" class="card-img-top" alt="Fashion">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fashion</h5>
                        <a href="{{ url('/categories/fashion') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card category-card">
                    <img src="{{ asset('images/product3.jpg') }}" class="card-img-top" alt="Books">
                    <div class="card-body text-center">
                        <h5 class="card-title">Books</h5>
                        <a href="{{ url('/categories/books') }}" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Featured Products Section -->
 <section id="home-products" class="home-featured-products">
    <div class="container">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="grid">
            <div class="home-product-card">
                <img src="images/product4.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p class="price">$49.99</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            <div class="home-product-card">
                <img src="images/product6.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p class="price">$39.99</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            <div class="home-product-card">
                <img src="images/product5.jpg" alt="Product 3">
                <h3>Product 3</h3>
                <p class="price">$59.99</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
</section>

<script src="script.js"></script>
@endsection
