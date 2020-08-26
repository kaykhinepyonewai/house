<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Rental;
use App\Township;
use App\User;
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
   public function home($value='')
   {
   	$properties = Property::where('status','approve')->take(6)->get();
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


     public function property($value='')
   {
    // $items = Item::orderBy('id','desc')->take(6)->get();
      $towships =Township::orderBy('id','desc')->take(3)->get();
    // dd($towships);
    return view('frontend.filterproperty',compact('towships'));
   }


     public function sucessful($value='')
   {
      // $items = Item::all();
      // $items = Item::orderBy('id','desc')->take(6)->get();
      // dd($items);
      return view('frontend.successful');
   }


      // Ajax 
    public function getItems(Request $request)
   {

      $sid = $request->sid;      
      if ($sid == 0) {
         $properties = Property::all();
      }
      else{
         $properties = Township::find($sid)->properties;
      } 
      
      
      return $properties;
   }


     public function search(Request $request)
   {

      $sname = $request->sname;   
      // dd($name);   

      $properties = Property::where('name','LIKE','%'.$sname.'%')->get();
       // dd($properties);
      
      
      return $properties;
   }

   

}
