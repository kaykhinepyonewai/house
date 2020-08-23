<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class FrontendController extends Controller
{
   public function home($value='')
   {
   	$properties = Property::where('status','approve')->get();
      // $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($properties);
   	return view('frontend.home',compact('properties'));
   }

}
