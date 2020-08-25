<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Rental;
use App\User;
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
   public function home($value='')
   {
   	$properties = Property::where('status','approve')->get();
      // $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($properties);
   	return view('frontend.home',compact('properties'));
   }

   public function waiting()
    {

        // $name = new Property;
        // $name->owner_name = Auth::user()->name;


        $properties = Property::where([['status','waiting'],['user_id',Auth::id()]])->get();
                    
        // dd($properties);
       return view('frontend.ownerwaiting',compact('properties'));
    }
    public function profile($value='')
    {
       $rentals = Rental::where('user_id',Auth::id())->get();
      // dd($rentals);
      return view('frontend.profile',compact('rentals'));
      
    }
    public function about($value='')
    {
     
      return view('frontend.about');
      
    }
    public function contact($value='')
    {
     
      return view('frontend.contact');
      
    }

   

}
