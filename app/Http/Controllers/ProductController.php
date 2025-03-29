<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::all();

        // Kirim data ke view
        return view('pages.product', compact('products'));
    }
    public function show($slug)
    {
        // Ambil produk berdasarkan slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Lempar data produk ke view
        return view('pages.product_detail', compact('product'));
    }
    
}
