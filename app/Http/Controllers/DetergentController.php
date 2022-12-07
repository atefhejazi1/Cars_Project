<?php

namespace App\Http\Controllers;

use App\Models\Detergent;
use App\Models\Featured_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DetergentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detergent = Detergent::all();
        $featuredItems = Featured_items::all();
        
        return view('detergent.index')->with('detergent', $detergent)->with('featuredItems', $featuredItems);
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

        $detergent = new Detergent();
        $detergent->name = $request->input('name');
        $detergent->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/detergent/', $fileName);
            $detergent->path_image = $fileName;
        }
        $detergent->price = $request->input('price');
        $detergent->featured = $request->input('featured');


        $detergent->save();
        return redirect()->route('detergent.index');

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
        $detergent = Detergent::findorFail($id);

        return view('detergent.edit', compact('detergent'));

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

        $detergent = Detergent::findorFail($id);
        $detergent->name = $request->name;
        $detergent->description = $request->description;
        $detergent->price = $request->price;
        if ($request->hasFile('path_image')) {
            $destination = 'images/detergent/' . $detergent->path_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/detergent/', $fileName);
            $detergent->path_image = $fileName;
        }
        $detergent->featured = $request->input('featured');


        $detergent->save();
        return redirect()->route('detergent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detergent = Detergent::findorFail($id)->delete();
        return redirect()->route('detergent.index');
    }
}
