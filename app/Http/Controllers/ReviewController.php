<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReviewController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth', array('except' => 'index'));
  }

  public function index()
  {
    $reviews = Review::with('user')->orderBy('created_at', 'DESC')->get(5);

    return view('reviews.index')->with('reviews', $reviews);
  }

  public function create()
  {
    return view('reviews.create');
  }

  public function store(Request $request)
  {
    Review::create(
      array(
        'rate' => $request->rate,
        'review' => $request->text,
        'user_id' => Auth::user()->id,
        //'shop_id' => Shops::shop()->id,
      )
    );

    return view('reviews.store');
  }

  public function edit($id)
  {
    $review = Review::find($id);

    return view('reviews.edit')->with('review', $review);
  }

  public function update($id, Request $request)
  {
    Review::find($id)->update(
      array(
        'rate' => $request->rate,
        'review' => $request->review,
        //ここにお店情報の変更も入れたいわからない
      )
    );

    return view('reviews.update');
  }

  public function destroy($id) {
    if (Review::find($id)->user_id == Auth::user()->id) {
      Review::destroy($id);
    }

    return view('reviews.destroy');
  }
}
