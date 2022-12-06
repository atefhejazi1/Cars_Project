<?php

namespace App\Http\Controllers;

use App\Models\Extrass;
use App\Models\Featured_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExtrassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extrass::all();
        $featuredItems = Featured_items::all();

        return view('extras.index')->with('extras', $extras)->with('featuredItems',$featuredItems);
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
            'path_image' => 'required|file',
            'price' => 'required',
            'featured' => 'required',

        ]);

        $extras = new Extrass;
        $extras->name = $request->input('name');
        $extras->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/extras/', $fileName);
            $extras->path_image = $fileName;
        }
        $extras->price = $request->input('price');
        $extras->featured = $request->input('featured');


        $extras->save();
        return redirect()->route('extras.index');

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
        $extras = Extrass::findorFail($id);

        return view('extras.edit', compact('extras'));

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

        $extras = Extrass::findorFail($id);
        $extras->name = $request->name;
        $extras->description = $request->description;
        if ($request->hasFile('path_image')) {
            $destination = 'images/extras/' . $extras->path_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/extras/', $fileName);
            $extras->path_image = $fileName;
        }
        $extras->price = $request->price;
        $extras->featured = $request->input('featured');

        $extras->save();
        return redirect()->route('extras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extras = Extrass::findorFail($id)->delete();
        return redirect()->route('extras.index');
    }
}
