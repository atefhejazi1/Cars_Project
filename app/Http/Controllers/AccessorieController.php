<?php

namespace App\Http\Controllers;

use App\Models\Accessorie;
use App\Models\Featured_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AccessorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessorie = Accessorie::all();
        $featuredItems = Featured_items::all();
        return view('accessorie.index')->with('accessorie', $accessorie)->with('featuredItems',$featuredItems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
            'path_image' => 'required|file',
            'price' => 'required',
            'featured' => 'required',

        ]);

        $accessorie = new Accessorie();
        $accessorie->name = $request->input('name');
        $accessorie->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/accessories/', $fileName);
            $accessorie->path_image = $fileName;
        }
        $accessorie->price = $request->input('price');
        $accessorie->featured = $request->input('featured');

        $accessorie->save();
        return redirect()->route('accessorie.index');

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
        $accessorie = Accessorie::findorFail($id);

        return view('accessorie.edit', compact('accessorie'));

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
            'path_image' => 'required|file',
            'price' => 'required',
            'featured' => 'required',
        ]);

        $accessorie = Accessorie::findorFail($id);
        $accessorie->name = $request->name;
        $accessorie->description = $request->description;
        $accessorie->price = $request->price;

        if ($request->hasFile('path_image')) {
            $destination = 'images/accessories/' . $accessorie->path_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/accessories/', $fileName);
            $accessorie->path_image = $fileName;
        }
        $accessorie->featured = $request->input('featured');


        $accessorie->save();
        return redirect()->route('accessorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accessorie = Accessorie::findorFail($id)->delete();
        return redirect()->route('accessorie.index');
    }
}
