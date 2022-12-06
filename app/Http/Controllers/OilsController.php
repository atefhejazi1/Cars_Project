<?php

namespace App\Http\Controllers;

use App\Models\Featured_items;
use App\Models\Oils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oils = Oils::all();
        $featuredItems = Featured_items::all();

        return view('oils.index')->with('oils', $oils)->with('featuredItems', $featuredItems);
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

        $oils = new Oils;
        $oils->name = $request->input('name');
        $oils->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/oils/', $fileName);
            $oils->path_image = $fileName;
        }
        $oils->price = $request->input('price');
        $oils->featured = $request->input('featured');

        $oils->save();
        return redirect()->route('oils.index');

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
        $oil = Oils::findorFail($id);

        return view('oils.edit', compact('oil'));

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
            // 'path_image' => 'required|file',
            'price' => 'required',
            'featured' => 'required',

        ]);

        $oils = new Oils;

        $oil = Oils::findorFail($id);
        $oil->name = $request->input('name');
        $oil->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/oils/', $fileName);
            $oils->path_image = $fileName;
        }

        // if ($request->hasFile('path_image')) {
        //     $file = $request->file('path_image');
        //     $oil->path_image = time() . '.' .$file->getClientOriginalName();
        //     $file->move('images/oils/', $oil->path_image);
        //     $request['path_image']= $oil->path_image;
        // }

        $oil->price = $request->input('price');
        $oil->featured = $request->input('featured');

        $oil->save();
        return redirect()->route('oils.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oil = Oils::findorFail($id)->delete();
        return redirect()->route('oils.index');
    }
}
