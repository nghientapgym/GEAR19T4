<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('product.index', compact('product'));
    }
}
