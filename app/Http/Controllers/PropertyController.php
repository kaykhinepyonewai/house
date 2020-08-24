<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;
use App\Category;
use App\Property;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $properties=Property::where([['status','approve'],['user_id',Auth::id()]])->get();
        // dd($properties);
       // return view('frontend.properties.index');


        // $name = new Property;
        // $name->owner_name = Auth::user()->name;


        $properties = Property::where([['status','approve'],['user_id',Auth::id()]])->get();
                    
        // dd($properties);
       return view('frontend.properties.index',compact('properties'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $townships = Township::All();
        $categories = Category::All();
         return view('frontend.properties.create',compact('townships','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'codeno' => 'required|min:4',     //codeno--->inppute name
            'name' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'p3' => 'required',
            'price' => 'required',
            'category' => 'required',
            'township' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'volume' => 'required',
            'phoneno' => 'required',
            'address' => 'required',
            'description' => 'required',

        ]);

       // dd($request);

       // if include file, uplodad

       //First photo
        $imageMain = time().'.'.$request->p1->extension();

        $request->p1->move(public_path('frontend/mainimg'),$imageMain);

        $myfile1 = 'frontend/mainimg/'.$imageMain;



         //second photo
        $imageIn = time().'.'.$request->p2->extension();

        $request->p2->move(public_path('frontend/inimg'),$imageIn);

        $myfile2 = 'frontend/inimg/'.$imageIn;


        //third photo

        $imageRoom = time().'.'.$request->p3->extension();

        $request->p3->move(public_path('frontend/rooming'),$imageRoom);

        $myfile3 = 'frontend/rooming/'.$imageRoom;





         // Data insert 
        $property = new Property;         //Item is Model name
        $property->codeno = $request->codeno;
        $property->name = $request->name;
        $property->mainphoto = $myfile1;
        $property->inphoto = $myfile2;
        $property->roomphoto = $myfile3;
        $property->pricepermonth = $request->price;
        $property->category_id = $request->category;
        $property->township_id = $request->township;
        $property->bedroom_qty = $request->bedroom;
        $property->bathroom_qty = $request->bathroom;
        $property->volume = $request->volume;
        $property->owner_name = Auth::user()->name;
        $property->user_id = Auth::id();
         $property->phoneno = $request->phoneno;
        $property->address = $request->address;
        $property->description = $request->description;


         $property->save();


        // Redirect
        return redirect()->route('frontend.properties.index');


        






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
        $categories=Category::all();
        $townships=Township::all();
        $property=Property::find($id);
        return view('frontend.properties.edit',compact('property','categories','townships'));
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
         $request->validate([
            'codeno' => 'required|min:4',     //codeno--->inppute name
            'name' => 'required',
            'p1' => 'sometimes',
            'p2' => 'sometimes',
            'p3' => 'sometimes',
            'price' => 'required',
            'category' => 'required',
            'township' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'volume' => 'required',
            'phoneno' => 'required',
            'address' => 'required',
            'description' => 'required',

        ]);

         // dd($request);

       // dd($request);

       // if include file, uplodad

       //First photo
        if ($request->hasFile('p1')) {
        $imageMain = time().'.'.$request->p1->extension();

        $request->p1->move(public_path('frontend/mainimg'),$imageMain);

        $myfile1 = 'frontend/mainimg/'.$imageMain;
        //delete old photo (unlink)
            unlink($request->oldp1);
         }else{
            $myfile1=$request->oldp1;
         }



         //second photo
         if ($request->hasFile('p2')) {
        $imageIn = time().'.'.$request->p2->extension();

        $request->p2->move(public_path('frontend/inimg'),$imageIn);

        $myfile2 = 'frontend/inimg/'.$imageIn;
        //delete old photo (unlink)
           unlink($request->oldp2);
        }else{
            $myfile2=$request->oldp2;
        }


        //third photo
        if ($request->hasFile('p3')) {
        $imageRoom = time().'.'.$request->p3->extension();

        $request->p3->move(public_path('frontend/rooming'),$imageRoom);

        $myfile3 = 'frontend/rooming/'.$imageRoom;
        //delete old photo (unlink)
           unlink($request->oldp3);
        }else{
            $myfile3=$request->oldp3;
        }





         // Data insert 
        $property =Property::find($id);         //Item is Model name
        $property->codeno = $request->codeno;
        $property->name = $request->name;
        $property->mainphoto = $myfile1;
        $property->inphoto = $myfile2;
        $property->roomphoto = $myfile3;
        $property->pricepermonth = $request->price;
        $property->category_id = $request->category;
        $property->township_id = $request->township;
        $property->bedroom_qty = $request->bedroom;
        $property->bathroom_qty = $request->bathroom;
        $property->volume = $request->volume;
        $property->owner_name = Auth::user()->name;
        $property->user_id = Auth::id();
         $property->phoneno = $request->phoneno;
        $property->address = $request->address;
        $property->description = $request->description;


         $property->save();


        // Redirect
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
