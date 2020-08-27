<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use App\Property;
use Mail;
use Illuminate\Support\Facades\Auth;

class RentalListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::where([['owner_id',Auth::id()],['status','request']])->get();

        // dd($rentals);
        return view('frontend.rentallists.index',compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         $propertry = Property::find($id);
         // $propertyname = Property::where()

         // dd($email);

        

         $propertry->status= $request->status;
         $propertry->save();
         

        //  $to_name = 'kaykhinepyonewai13@gmail.com';
        //  $to_email = 'kaykhinepyonewai@gmail.com';

        //  Mail::send([],[],function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //     ->subject('Laravel Test Mail');
        //     $message->from('kaykhinepyonewai13@gmail.com','Test Mail');
        //     $message->setBody('Khine  Wai');

        // });

         return redirect()->route('properties.index');

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
