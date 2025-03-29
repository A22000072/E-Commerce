<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu untuk mengakses keranjang.');
        }
        return view('pages.profile');
    }
}
