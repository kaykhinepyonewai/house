<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Rental;
use App\User;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('frontend.rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            
            'phoneno' => 'required',
             'months' => 'required',
            'planedate' => 'required',
            'total' => 'required',
            'ownerid' => 'required',
            'propertyid'=> 'required'

        ]);

        // dd(Auth::user()->name);

        $rental = new Rental;
        $rental->rentalno = uniqid();
        $rental->customer_name = Auth::user()->name;
        $rental->phoneno = $request->phoneno;
        $rental->rentalperiod = $request->months;
        $rental->plandate = $request->planedate;
        $rental->totalprice = $request->total;
        $rental->owner_id = $request->ownerid;
        $rental->property_id = $request->propertyid;
        $rental->user_id = Auth::id();



        $rental->save();

        // return redirect()->route('frontend/home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        // dd($property);
        return view('frontend.rentals.show',compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // return view('frontend.rentals.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rental = Rental::find($id);
        $rental->status= $request->status;
        $rental->save();
        return redirect()->route('rentallists.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
