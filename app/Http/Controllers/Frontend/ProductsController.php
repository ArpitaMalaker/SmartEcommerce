<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Alert;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(9);
        //$product = Product::all();
        return view('Frontend.pages.product.index')->with('products', $products);
    }

     public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
       if (!is_null($product)) {
        return view('Frontend.pages.product.show', compact('product'));
      }else {
        Alert::toast('Sorry !! There is no product by this URL..!!', 'warning'); 
        return redirect()->route('products');
      }
    }
}
