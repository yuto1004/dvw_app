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
      $this->middleware('auth')->except('index', 'show');
    }

    public function create()
    {
        $genres = Shop::groupBy('genre')->get();

        return view('shops.shop_create')->with('genres',$genres);
    }

    public function store(Request $request)
    {
      Shop::create(
        array(
          'shop_name' => $request->shop_name,
          'genre' => $request->genre,
          'address' => $request->address,
          'link' => $request->link
        )
      );
  
      return view('shops.shop_store');
    }

    public function index()
    {
      $shops = Shop::orderBy('id', 'ASC')->paginate(9);
      return view('shops.shop_index')->with('shops', $shops);
    }
    
    public function show($shop_id)
    {
      $shop = Shop::find($shop_id);
      $reviews = Review::where("shop_id",$shop_id)->get();
      return view('shops.shop_show')->with(['reviews'=>$reviews, 'shop'=>$shop]);
    }
}
