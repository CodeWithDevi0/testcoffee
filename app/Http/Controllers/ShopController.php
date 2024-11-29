<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        return view('shop.index', compact('products'));
    }
}
