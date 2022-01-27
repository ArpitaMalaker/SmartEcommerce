<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Brand;
use Image;
Use Alert;
use File;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id','asc')->get();
        return view('Backend.pages.brands.index', compact('brands'));
    }

    public function create()
    {
        
        return view('Backend.pages.brands.create');
    }

     public function store(Request $request)
    {
        //validation
        $this->validate($request, [
        'brand_name' => 'required',
        'brand_image' => 'nullable|image',
        
       ],
       [
       'brand_name.required' => 'Please provide a Category Name',
        'brand_image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extentions',
       ]);

        $brand = new Brand(); 
        $brand->name = $request->brand_name;
        $brand->description = $request->brand_description;
        

        if($request->hasFile('brand_image'))
        {
            $image = $request->file('brand_image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $save_path = public_path('images/brands/'.$image_name);
            Image::make($image)->save($save_path);
            $brand->image = $image_name;
        }
        $brand->save();
        Alert::toast('Brand Created Successfully!', 'success');
        return redirect()->route('admin.brands');
       
    }

    public function edit($id)
    {
        
        //$categories = Category::orderBy('id','desc')->get();
       
        $brands = Brand::find($id);
        return view('Backend.pages.brands.edit', compact('brands'));
    }
    
    public function update(Request $request, $id)
    {
         //validation
        $this->validate($request, [
        'brand_name' => 'required',
        'brand_image' => 'nullable|image',
        
       ],
       [
       'brand_name.required' => 'Please provide a Brand Name',
        'brand_image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extentions',
       ]);

        $brand =  Brand::find($id);
        $brand->name = $request->brand_name;
        $brand->description = $request->brand_description;
        

        //insert images also
        if($request->hasFile('brand_image')){
        //Delete the old image from folder

          // if (File::exists('images/categories/'.$request->brand_image))
          //  {
          //   File::delete('images/categories/'.$request->brand_image);
          // }

          $image = $request->file('brand_image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/brands/' .$img);
          Image::make($image)->save($location);
          $brand->image = $img;
      }
      $brand->save();

      Alert::toast('Brand has updated successfully !!', 'success'); 
      return redirect()->route('admin.brands');

       
    }
    
    public function delete($id)
    {
      $brand = Brand::find($id);
      if (!is_null($brand)) {
        // If it is parent brand, then delete all its sub brand
      

        // Delete brand image
        if (File::exists('images/brands/'.$brand->image)) {
          File::delete('images/brands/'.$brand->image);
        }
        $brand->delete();
      }
       Alert::toast('Brand has deleted successfully !!', 'success'); 
      return back();

    }
}
