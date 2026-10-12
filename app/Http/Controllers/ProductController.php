<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Tampilkan daftar produk dari database.
     */
    public function index(): View
    {
        $products = Product::orderBy('name')->get();

        return view('products.index', compact('products'));
    }
}
