<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
    //
   
    public function index()
    {
        return view('admin.pages.index');
    }
     public function product_create()
    {
        return view('admin.pages.products.create');
    }
    public function manage_products()
    {
        $product = Product::orderBy('id','desc')->get();
        return view('admin.pages.products.index')->with('products', $product);
    }
    public function product_store(Request $request)
    {
        //validation
        $request->validate([
        'product_title' => 'required|max:150',
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ]);


        $product = new Product();
        
        $product->title = $request->product_title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->quantity = $request->quantity;
        $product->slug = Str::slug($request->product_title);

        $product->save();
        //single image upload and insert in database
        // if($request->hasFile('product_image'))
        // {
        //     //insert image
        //     $image = $request->file('product_image');
        //     $image_name = time().'_'.$image->getClientOriginalName();
        //     $save_path = public_path('uploads/products/'.$image_name);
        //     Image::make($image)->save($save_path);

        //     $product_image = new ProductImage();
        //     $product_image->product_id = $product->id;
        //     $product_image->image = $image_name;
        //     $product_image->save();
        // }
      //multiple image upload and insert in database
        if(count($request->product_image)>0)
        {

            foreach($request->product_image  as $image)
            {
                $image_name = time().'_'.$image->getClientOriginalName();
                $save_path = public_path('uploads/products/'.$image_name);
                Image::make($image)->save($save_path);

                 $product_image = new ProductImage();
                 $product_image->product_id = $product->id;
                 $product_image->image = $image_name;
                 $product_image->save();
            }
            
        }

        return redirect()->route('admin.products.create');
       
    }
    public function product_edit($id)
    {
        //$product = Product::orderBy('id','desc')->get();
        $product = Product::find($id);
        return view('admin.pages.products.edit')->with('product', $product);

    }
     public function product_update(Request $request, $id)
    {
        //validation
        $request->validate([
        'product_title' => 'required|max:150',
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ]);


        $product = Product::find($id);
        
        $product->title = $request->product_title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        

        $product->save();
        
        

        return redirect()->route('admin.products');
       
    }
}
