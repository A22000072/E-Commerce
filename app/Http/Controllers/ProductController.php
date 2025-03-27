<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil data produk dari database (contoh menggunakan model Product)
        // $products = Product::all();

        return view('pages.product', [
            // 'products' => $products
        ]);
    }
    public function detail()
    {
        // Ambil data produk dari database (contoh menggunakan model Product)
        // $products = Product::all();

        return view('pages.product_detail', [
            // 'products' => $products
        ]);
    }
}
