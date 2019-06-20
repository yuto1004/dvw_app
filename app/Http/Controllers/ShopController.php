<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\User;
use App\Review;
use Auth;

class ShopController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function create()
    {
        $genres = Shop::groupBy('genre')->get();

        return view('shops.shop_create')->with('genres',$genres);
    }

    public function store(Request $request)
    {
      Review::create(
        array(
          'shop_name' => $request->shop_name,
          'genre' => $request->genre,
          'address' => $request->address,
          'link' => $request->link
        )
      );
  
      return view('shops.shop_store');
    }
    
}
