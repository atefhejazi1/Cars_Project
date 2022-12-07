<?php

namespace App\Http\Controllers;

use App\Models\SparePartsDepartment;
use Illuminate\Http\Request;

class SparePartsDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sparePartsDepartment = SparePartsDepartment::all();
        return view('sparePartsDepartment.index')->with('sparePartsDepartment', $sparePartsDepartment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $sparePartsDepartment = new SparePartsDepartment;

        $sparePartsDepartment->name = $request->input('name');
        $sparePartsDepartment->description = $request->input('description');    
        $sparePartsDepartment->save();
// return $request;
        return redirect()->route('department.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $department = SparePartsDepartment::findorFail($id);

        return view('sparePartsDepartment.edit', compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $department = SparePartsDepartment::findorFail($id);
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = sparePartsDepartment::findorFail($id)->delete();
        return redirect()->route('department.index');
    }
}
