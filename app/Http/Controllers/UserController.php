<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\User;
use App\Review;
use Auth;

class UserController extends Controller
{
    public function show($id)
    {

      $name = User::find($id)->name;
      $reviews = User::find($id)->reviews()->orderBy('created_at', 'DESC')->paginate(5);

      return view('users.show')->with(['name' => $name, 'reviews' => $reviews]);
    }
}
