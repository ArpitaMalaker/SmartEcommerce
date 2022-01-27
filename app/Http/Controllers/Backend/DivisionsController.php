<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Alert;
use App\Models\Division;
use App\Models\District;

class DivisionsController extends Controller
{
  public function index()
  {
    $divisions = Division::orderBy('priority', 'asc')->get();
    return view('Backend.pages.divisions.index', compact('divisions'));
  }

  public function create()
  {
    return view('Backend.pages.divisions.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'priority'  => 'required',
    ],
    [
      'name.required'  => 'Please provide a division name',
      'priority.required'  => 'Please provide a division priority',
    ]);

    $division = new Division();
    $division->name = $request->name;
    $division->priority = $request->priority;
    $division->save();

    Alert::toast('A new division has added successfully !!', 'success');
    return redirect()->route('admin.divisions');

  }

  public function edit($id)
  {
    $division= Division::find($id);
    if (!is_null($division)) {
      return view('Backend.pages.divisions.edit', compact('division'));
    }else {
      return resirect()->route('admin.divisions');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name'  => 'required',
        'priority'  => 'required',
      ],
      [
        'name.required'  => 'Please provide a division name',
        'priority.required'  => 'Please provide a division priority',
      ]);

      $division = Division::find($id);
      $division->name = $request->name;
      $division->priority = $request->priority;
      $division->save();

      Alert::toast('Division has updated successfully !!', 'success');  
      return redirect()->route('admin.divisions');

    }

    public function delete($id)
    {
      $division = Division::find($id);
      if (!is_null($division)) {
        //Delete all the districts for this division
         $districts = District::where('division_id', $division->id)->get();
         foreach ($districts as $district) {
          $district->delete();
         }
        $division->delete();
      }
      Alert::toast('Division has deleted successfully !!', 'success'); 
      return back();

    }
}
 