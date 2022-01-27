<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Alert;
use App\Models\District;
use App\Models\Division;

class DistrictsController extends Controller
{
  public function index()
  {
    $districts = District::orderBy('name', 'asc')->get();
    return view('Backend.pages.districts.index', compact('districts'));
  }

  public function create()
  {
    $divisions = Division::orderBy('priority', 'asc')->get();
    return view('Backend.pages.districts.create', compact('divisions'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'division_id'  => 'required',
    ],
    [
      'name.required'  => 'Please provide a district name',
      'division_id.required'  => 'Please provide a division for the district',
    ]);

    $district = new District();
    $district->name = $request->name;
    $district->division_id = $request->division_id;
    $district->save();

    Alert::toast('A new district has added successfully !!', 'success');
    return redirect()->route('admin.districts');

  }

  public function edit($id)
  {
    $divisions = Division::orderBy('priority', 'asc')->get();
    $district= District::find($id);
    if (!is_null($district)) {
      return view('Backend.pages.districts.edit', compact('district', 'divisions'));
    }else {
      return resirect()->route('admin.districts');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name'  => 'required',
        'division_id'  => 'required',
      ],
      [
        'name.required'  => 'Please provide a district name',
        'division_id.required'  => 'Please provide a division for the district',
      ]);

      $district = District::find($id);
      $district->name = $request->name;
      $district->division_id = $request->division_id;
      $district->save();

       Alert::toast('District has updated successfully !! !!', 'success');
      return redirect()->route('admin.districts');

    }

    public function delete($id)
    {
      $district = District::find($id);
      if (!is_null($district)) {
        $district->delete();
      }
       Alert::toast('District has deleted successfully !!', 'success');
      return back();

    }
}
