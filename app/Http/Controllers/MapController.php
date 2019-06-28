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
    
    public function search(Request $request){
        $shops = Shop::all();
        $genres = Shop::groupBy('genre')->get(['genre']);
        $keiro1 = $request->s[0];
        $keiro2 = $request->s[1];
        $reviews = Review::all();
        return view('search.search')
        ->with(array('shops'=>$shops,'genres'=>$genres,'keiro1'=>$keiro1,'keiro2'=>$keiro2,'reviews'=>$reviews));
    }

    public function about(){
        return view('about_us');
    }
}
