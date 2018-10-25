<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class CartController extends Controller
{
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        if($product == null){
            return view('errors.404');
        } 
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->back()->with('success', $product->name. ' agregado al carrito');
    }

    public function getCart() {
        $productsChunk = Product::all()->random(3);
        if(!Session::has('cart')) {
            return view('shop.cart', ['productsChunk' => $productsChunk,'products' => null]);
        }else {
            
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('shop.cart', ['productsChunk' => $productsChunk,'products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        }
    }

    public function removeCart(Request $request, $id){
        $productsChunk = Product::all()->take(3);
        if(!Session::has('cart')) {
            return view('shop.cart', ['productsChunk' => $productsChunk,'products' => null]);
        } else {

            $cart = Session::get('cart');
            // unset($cart->items[$id]);
            // Session::put('cart', $cart);
            Session::forget('cart');

            return back()->with(['products' => $cart->items]);
            
        }
    }
}
