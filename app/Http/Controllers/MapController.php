<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MapController extends Controller
{
    public function welcome(){
        return view('search.top');
    }
    
    public function search(){
        return view('search.search');
    }
}
