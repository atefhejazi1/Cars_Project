<?php

namespace App\Http\Controllers;

use App\Models\Featured_items;
use App\Models\SparePartsDepartment;
use App\Models\SparePartsItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SparePartsItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sparePartsItems = SparePartsItems::all();
        $sparePartsDepartment = SparePartsDepartment::all();
        $featuredItems = Featured_items::all();
        
        return view('sparePartsItems.index')->with('sparePartsItems', $sparePartsItems)->with('sparePartsDepartment', $sparePartsDepartment)->with('featuredItems', $featuredItems);
    }
    public function view()
    {
        $sparePartsItems = SparePartsItems::paginate(5);
        $sparePartsDepartment = SparePartsDepartment::all();
        $featuredItems = Featured_items::all();
        
        return view('index')->with('sparePartsItems', $sparePartsItems)->with('sparePartsDepartment', $sparePartsDepartment)->with('featuredItems', $featuredItems);
    }


    public function ShopNowSparePartsItems()
    {
        $sparePartsItems = SparePartsItems::paginate(5);
        $sparePartsDepartment = SparePartsDepartment::all();
        $featuredItems = Featured_items::all();
        
        return view('/website/ShopNowSparePartsItems')->with('sparePartsItems', $sparePartsItems)->with('sparePartsDepartment', $sparePartsDepartment)->with('featuredItems', $featuredItems);
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
            // 'spare_parts_department_id' => 'required',
            'featured' => 'required',

        ]);

        $sparePartsItems = new SparePartsItems;
        $sparePartsItems->name = $request->input('name');
        $sparePartsItems->description = $request->input('description');
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/sparePartsItems/', $fileName);
            $sparePartsItems->path_image = $fileName;
        }
        $sparePartsItems->price = $request->input('price');
        $sparePartsItems->spare_parts_department_id = $request->input('spare_parts_items_id');
        $sparePartsItems->featured = $request->input('featured');


        $sparePartsItems->save();
        return redirect()->route('sparePartsItems.index');

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
        $item = SparePartsItems::findorFail($id);
        $sparePartsDepartment = SparePartsDepartment::all();

        return view('sparePartsItems.edit', compact('item'))->with('sparePartsDepartment', $sparePartsDepartment);

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
            'price' => 'required',
            'featured' => 'required',

        ]);

        $item = SparePartsItems::findorFail($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        if ($request->hasFile('path_image')) {
            $destination = 'images/sparePartsItems/' . $item->path_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('path_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/sparePartsItems/', $fileName);
            $item->path_image = $fileName;
        }

        $item->spare_parts_department_id = $request->spare_parts_items_id;
        $item->featured = $request->featured;
        $item->save();
        return redirect()->route('sparePartsItems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SparePartsItems::findorFail($id)->delete();
        return redirect()->route('sparePartsItems.index');
    }
}
