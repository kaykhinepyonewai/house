<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function home($value='')
   {
   	// $items = Item::all();
      // $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.home');
   }

}
