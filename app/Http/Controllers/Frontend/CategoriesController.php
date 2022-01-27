<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; 
use Alert;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $category = Category::find($id);
        if (!is_null($category)) {
          return view('Frontend.pages.categories.show', compact('category'));
        }else {
         Alert::toast('Sorry !! There is no category by this ID!', 'errors'); 
          return redirect('/');
        }
    }

    
}
