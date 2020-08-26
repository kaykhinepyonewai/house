<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Rental;

class BackendController extends Controller
{
    public function dashboard($value='')
   {
   	return view('backend.dashboard');
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


    public function confirm($value='')
   {

     $properties=Property::where('status','approve')->get();
    return view('backend.ownerpost.confirm',compact('properties'));
   }


    public function confirmdetail($id)
   {

     $propertry= Property::find($id);
     // dd($propertry);
    return view('backend.ownerpost.confirmdetail',compact('propertry'));
   }





}
