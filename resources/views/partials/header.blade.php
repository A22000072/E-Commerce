<header>
    <nav>
        <ul>
            {{-- <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('cart.index') }}">Cart</a></li>
            <li><a href="{{ route('about') }}">About</a></li> --}}
        </ul>
    </nav>
</header>
<body>
         <!-- Navigation-->
         <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/home') }}">E-Commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">Sale</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/product') }}">Products</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <li><a class="dropdown-item" href="{{ url('/categories/electronics') }}">Electronics</a></li>
                                <li><a class="dropdown-item" href="{{ url('/categories/fashion') }}">Fashion</a></li>
                                <li><a class="dropdown-item" href="{{ url('/categories/books') }}">Books</a></li>
                                <li><a class="dropdown-item" href="{{ url('/categories/beauty') }}">Beauty</a></li>
                                <li><a class="dropdown-item" href="{{ url('/categories/home-living') }}">Home & Living</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/cart') }}">
                            <i class="fas fa-shopping-cart"></i>
                        </a></li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/profile') }}">
                                <i class="far fa-user-circle"></i>  
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        