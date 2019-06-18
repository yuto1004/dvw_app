<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shop;

class MapController extends Controller
{

    public function welcome(){
        $shops = Shop::all();
        return view('search.top')->with('shops',$shops);
    }
    
    public function search(){
        $shops = Shop::all();
        return view('search.search')->with('shops',$shops);
    }
}
