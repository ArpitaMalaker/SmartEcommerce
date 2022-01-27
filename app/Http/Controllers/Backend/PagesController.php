<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;
use Image;

class PagesController extends Controller
{
    //
   
    public function index()
    {
        return view('Backend.pages.index');
    }
     
}
