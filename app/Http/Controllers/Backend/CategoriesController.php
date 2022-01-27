<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Image;
Use Alert;
use File;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','asc')->get();
        return view('Backend.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', Null)->get();
        return view('Backend.pages.categories.create', compact('main_categories'));
    }

     public function store(Request $request)
    {
        //validation
        $this->validate($request, [
        'category_name' => 'required',
        'category_image' => 'nullable|image',
        
       ],
       [
       'category_name.required' => 'Please provide a Category Name',
        'category_image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extentions',
       ]);

        $category = new Category(); 
        $category->name = $request->category_name;
        $category->description = $request->category_description;
        $category->parent_id = $request->parent_id;

        if($request->hasFile('category_image'))
        {
            $image = $request->file('category_image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $save_path = public_path('images/categories/'.$image_name);
            Image::make($image)->save($save_path);
            $category->image = $image_name;
        }
        $category->save();
        Alert::toast('Category Created Successfully!', 'success');
        return redirect()->route('admin.categories');
       
    }

    public function edit($id)
    {
        
        //$categories = Category::orderBy('id','desc')->get();
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', Null)->get();
        $categories = Category::find($id);
        return view('Backend.pages.categories.edit', compact('main_categories', 'categories'));
    }
    
    public function update(Request $request, $id)
    {
         //validation
        $this->validate($request, [
        'category_name' => 'required',
        'category_image' => 'nullable|image',
        
       ],
       [
       'category_name.required' => 'Please provide a Category Name',
        'category_image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extentions',
       ]);

        $category =  Category::find($id);
        $category->name = $request->category_name;
        $category->description = $request->category_description;
        $category->parent_id = $request->parent_id;

        //insert images also
        if($request->hasFile('category_image')){
        //Delete the old image from folder

          // if (File::exists('images/categories/'.$request->category_image))
          //  {
          //   File::delete('images/categories/'.$request->category_image);
          // }

          $image = $request->file('category_image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/categories/' .$img);
          Image::make($image)->save($location);
          $category->image = $img;
      }
      $category->save();

      Alert::toast('Category has updated successfully !!', 'success'); 
      return redirect()->route('admin.categories');

       
    }
    
    public function delete($id)
    {
      $category = Category::find($id);
      if (!is_null($category)) {
        // If it is parent category, then delete all its sub category
        if ($category->parent_id == NULL) {
          // Delete sub categories
          $sub_categories = Category::orderBy('name', 'desc')->where('parent_id', $category->id)->get();

          foreach ($sub_categories as $sub) {
            // Delete category image
            if (File::exists('images/categories/'.$sub->image)) {
              File::delete('images/categories/'.$sub->image);
            }
            $sub->delete();
          }
          
        }

        // Delete category image
        if (File::exists('images/categories/'.$category->image)) {
          File::delete('images/categories/'.$category->image);
        }
        $category->delete();
      }
       Alert::toast('Category has deleted successfully !!', 'success'); 
      return back();

    }
}
