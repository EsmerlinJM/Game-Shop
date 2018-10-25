<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\OrderCart;
use Session;
use Auth;

class CheckoutController extends Controller
{
    // GET DATA
    public function getCheckoutAddress(){
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('shop.checkout-address', ['totalPrice' => $total]);
        }
    }

    public function getCheckoutShipping(){
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('shop.checkout-shipping', ['totalPrice' => $total]);
        }
    }

    public function getCheckoutPay(){
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('shop.checkout-pay', ['totalPrice' => $total]);
        }
    }

    // POST DATA
    public function saveCheckoutAddress(Request $request){
        $rules = [
            'name'  => 'required|string',
            'lastname' => 'required|string',
            'phone' => 'required|numeric|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'email' => 'required|email',
            'zip' => 'required|numeric|min:6',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'contact' => 'required|string',
            'street' => 'required|string'
        ];

        $this->validate($request, $rules);
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalPrice = $cart->totalPrice;
            $address = $request->zip.', '. $request->city . ', ' . $request->state
            . ', ' . $request->country . ', ' .$request->street;
            //dd($address);
            return redirect()->route('checkout-shipping')->with(compact('totalPrice', 'address'));
        }
    }

    public function saveCheckoutShipping(Request $request){
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {

            if($request->address != ""){
                
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $totalPrice = $cart->totalPrice;
                $orderCart = OrderCart::create([
                    'user_id' => Auth::user()->id,
                    'address' => $request->address,
                    'total' => $totalPrice,
                    'method_shipping' => $request->delivery
                ]);
                $orderCart->save();
                return redirect()->route('checkout-pay')->with('totalPrice');
            } else {
                return view('erros.404');
            }
            
        }
    }

    public function saveCheckoutPay(){
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            return view('shop.checkout-pay', ['totalPrice' => $total]);
        }
    }
}
