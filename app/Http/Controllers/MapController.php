<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shop;
use App\User;
use App\Review;
use Auth;

class MapController extends Controller
{

    public function welcome(){
        $shops = Shop::all();
        return view('search.top')->with('shops',$shops);
    }
    
    public function search(){
        $shops = Shop::all();
        $genres = Shop::groupBy('genre')->get();
        return view('search.search')->with(array('shops'=>$shops,'genres'=>$genres));
    }
}
