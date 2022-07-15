<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('admin.product.index', compact('products', 'categories'));
    }
    // store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'category_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $product->image = $imageName;
        $product->price = $request->price;
        $product->save();
    }
    // update
    public function update(Request $request, $slug)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'image' => 'required|mimes:jpeg,png',
                'price' => 'required|numeric',
            ]);
            // move image to public folder
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            // image name to database
            $product = Product::where('slug', $slug)->first();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->image = $imageName;
            $product->price = $request->price;
            $product->save();
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật thành công');
        }catch (\Exception $e){
            return redirect()->route('admin.product.index')->with('error', $e->getMessage());
        }


    }
    // show
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();
        return view('admin.product.show', compact('product', 'categories'));
    }
    // destroy
    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Xóa thành công');
    }



}
