<?php

namespace App\Http\Controllers;

use App\Models\Accessorie;
use App\Models\Detergent;
use App\Models\Extrass;
use App\Models\Featured_items;
use App\Models\Oils;
use App\Models\SparePartsItems;
use Illuminate\Http\Request;

class ViewWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sparePartsItems = SparePartsItems::paginate(4);
        $accessorie = Accessorie::paginate(4);
        $oil = Oils::paginate(4);
        $extrass = Extrass::paginate(4);
        $detergent = Detergent::paginate(4);
        
        $featuredItems = Featured_items::paginate(4);
      
        
        return view('index')->with('sparePartsItems', $sparePartsItems)->with('featuredItems', $featuredItems)->with('accessorie', $accessorie)->with('oils', $oil)->with('extrass', $extrass)->with('detergent', $detergent);
    }


}