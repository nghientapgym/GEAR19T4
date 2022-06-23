<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $products = Cart::where('user_id', auth()->id())->get();
        $products->transform(function($product){
            $item = Product::where('id', $product->product_id)->first();
            $product->name = $item->name;
            $product->price = $item->price;
            $product->slug = $item->slug;
            return $product;
        });
        $total = 0;
        foreach($products as $product){
            $total += $product->price * $product->quantity;
        }
        return view('cart.index', compact('products', 'total'));
    }
    public function add(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $request->product_id)->first();
        if($request->quantity == null){
            $request->quantity = 1;
        }
        if ($cart) {

            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }
        return redirect()->route('cart.index');
    }
    public function remove(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $request->product_id)->first();
        $cart->delete();
        return redirect()->back();
    }
    //update quantity
    public function update(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $request->product_id)->first();
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back();
    }

}
