{{-- <div class="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <h2>Dashboard</h2>
        <p>Welcome, Akbar</p>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-menu">
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/Riwayat') }}">Riwayat</a></li>
            <li><a href="{{ url('/cart') }}">Cart</a></li>
            <li><a href="{{ url('/Setting') }}">Settings</a></li>
            <li><a href="{{ url('/product') }}">Logout</a></li>
        </ul>
    </div>
</div> --}}
<div class="sidebar">
    <div class="sidebar-header text-center">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="E-commerce Logo" class="logo">
        </a>
    </div>    
    <ul class="nav flex-column">
        {{-- <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="fa-regular fa-house"></i>
                <span>Home</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="/profile">
                <i class="fa-regular fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products">
                <i class="fa-regular fa-box"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cart">
                <i class="fa-regular fa-cart-shopping"></i>
                <span>Cart</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/settings">
                <i class="fa-regular fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-regular fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>        
    </ul>
</div>
