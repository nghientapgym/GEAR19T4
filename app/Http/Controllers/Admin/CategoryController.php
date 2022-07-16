<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // index
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    // store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
    }
    // update
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
        ]);
        $category = Category::where('slug', $slug)->first();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
    }
    // destroy
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
    }
    //show
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.categories.show', compact('category'));
    }

}
