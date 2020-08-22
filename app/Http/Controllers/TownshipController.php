<?php

namespace App\Http\Controllers;
use App\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $townships=Township::all();
        // dd($categories);
        return view('backend.townships.index',compact('townships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.townships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        // dd($request);

        // Validation
        $request->validate([
            
            'name'=>'required',
            
            
        ]);

   

        // If include file, upload
        // File Updoad 
        
       
        

        // Data insert
        $township=new Township;
        
        $township->name=$request->name;
        // $township->photo=$myfile;

        $township->save();

        // Redirect
        return redirect()->route('townships.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $township=Township::find($id);
        return view('backend.townships.show',compact('township'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $township=Township::find($id);
        return view('backend.townships.edit',compact('township'));
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
        // dd($request);

        // Validation
        $request->validate([
            
            'name'=>'required',
           
            
        ]);

        // If include file, upload
        // File Updoad 
        
        // Data insert
        $township=Township::find($id);
        
        $township->name=$request->name;
   

        $township->save();

        // Redirect
        return redirect()->route('townships.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $township=Township::find($id);
        $township->delete();
        // unlink($township->photo);
        //redirect
        return redirect()->route('townships.index');
    }
}
