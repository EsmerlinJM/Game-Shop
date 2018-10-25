<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function getDetails($id){
        $product = Product::find($id);
        $products = Product::all()->random(3);
        if($product == null){
            return view('errors.404');
        }
        return view('shop.product-detail')->with(compact('product', 'products'));
    }

    public function getSearch(Request $request){        
        if($request->search == ""){
            return view('errors.404');
        } else {
            $products = Product::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('image', 'LIKE', '%'.$request->search.'%')
            ->orWhere('description', 'LIKE', '%'.$request->search.'%')
            ->orWhere('long_description', 'LIKE', '%'.$request->search.'%')
            ->orWhere('price', 'LIKE', '%'.$request->search.'%')
            ->paginate(3);
            $products->appends($request->only('search'));
            return view('shop.search')->with(compact('products'));
        }
    }

    public function getProductPlatform(){

        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Plataformas');
        })->paginate(3);

        return view('shop.category-platform')->with(compact('products'));
    }

    public function getProductCode(){

        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Codigos');
        })->paginate(3);

        return view('shop.category-code')->with(compact('products'));
    }

    public function getProductPc(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Plataforma')
                  ->where('description', 'LIKE', '%PC%');
        })->paginate(3);
        return view('shop.category-platform')->with(compact('products'));
    }

    public function getProductPlay(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Plataforma')
                  ->where('description', 'LIKE', '%Play%');
        })->paginate(3);
        return view('shop.category-platform')->with(compact('products'));
    }

    public function getProductXbox(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Plataforma')
                  ->where('description', 'LIKE', '%Xbox%');
        })->paginate(3);
        return view('shop.category-platform')->with(compact('products'));
    }

    public function getProductNintendo(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Plataforma')
                  ->where('description', 'LIKE', '%Nintendo%');
        })->paginate(3);
        return view('shop.category-platform')->with(compact('products'));
    }

    public function getCodePc(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Code')
                  ->where('description', 'LIKE', '%origin%');
        })->paginate(3);
        return view('shop.category-code')->with(compact('products'));
    }

    public function getCodePlay(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Code')
                  ->where('description', 'LIKE', '%Play%');
        })->paginate(3);
        return view('shop.category-code')->with(compact('products'));
    }

    public function getCodeXbox(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Code')
            ->where('description', 'LIKE', '%Xbox%');
        })->paginate(3);
        return view('shop.category-code')->with(compact('products'));
    }

    public function getCodeSteam(){
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', '=', 'Code')
                  ->where('description', 'LIKE', '%Steam%');
        })->paginate(3);
        return view('shop.category-code')->with(compact('products'));
    }

}
