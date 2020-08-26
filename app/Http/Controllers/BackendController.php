<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Rental;
use App\User;

class BackendController extends Controller
{
    public function dashboard($value='')
   {

    $properties = Property::all();
    $propertiescount =  $properties->count();

    $propertiesapprove = Property::where('status','approve')->get();
    $propertiesapprovecount =  $propertiesapprove->count();

    $propertieswaiting = Property::where('status','waiting')->get();
    $propertiesrwaitingcount =  $propertieswaiting->count();

    $propertiesclose = Property::where('status','close')->get();
    $propertiesrclosecount =  $propertiesclose->count();

    $rentals = Rental::all();
    $rentalscount = $rentals->count();


    $rentalsapprove = Rental::where('status','approve')->get();
    $rentalsapprovecount = $rentalsapprove->count();

    $rentalsrequest = Rental::where('status','request')->get();
    $rentalsrequestcount = $rentalsrequest->count();

    $user = User::all();
    $usercount = $user->count();

    // $user = User::where();
    // $usercount = $user->count();


   	return view('backend.dashboard',compact('propertiescount','rentalsapprovecount','rentalscount','rentalsrequestcount','propertiesapprovecount','propertiesrwaitingcount','propertiesrclosecount','usercount'));


   }

    public function waiting($value='')
   {

   	 $properties=Property::where('status','waiting')->get();
   	return view('backend.ownerpost.waiting',compact('properties'));
   }


    public function waitingdetail($id)
   {

   	 $propertry= Property::find($id);
   	 // dd($propertry);
   	return view('backend.ownerpost.waitingdetail',compact('propertry'));
   }

   public function rentaldetail($value='')
   {
      $rentals = Rental::where('status','approve')->get();
      // dd($rentals);
      return view('backend.rentaldetail',compact('rentals'));
   }


   // public function approveupdate(Request $request, $id)
   //  {
   //        $propertry = Property::find($id);
   //        $propertry->status= $request->status;
   //          $propertry->save();

   //      return redirect()->route('orders.index');


   //  }





}
