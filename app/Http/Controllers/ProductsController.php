<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Session;
use App\Cart;

class ProductsController extends Controller
{
    public function index(){
        $products =Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/');
    }

    public function shoppingCart(){
        if(!Session::has('cart'))
        {
            return view('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
