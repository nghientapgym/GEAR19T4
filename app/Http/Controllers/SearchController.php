<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $posts = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('home.search', compact('posts'));
    }
}
