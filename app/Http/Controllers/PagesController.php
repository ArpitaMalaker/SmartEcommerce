<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {
		return view('pages.index');
	}

	public function contact()
    {
		return view('pages.contact');
	}

	public function product()
    {
    	//$product = Product::orderBy('id','desc')->get();
    	$product = Product::all();
		return view('pages.product.index')->with('products', $product);
	}
}
