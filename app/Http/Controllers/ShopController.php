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
        $genre = array_unique(Shop::$genre);
        return view('reviews.shop_register')->with('genre',$genre);
    }
    
}
