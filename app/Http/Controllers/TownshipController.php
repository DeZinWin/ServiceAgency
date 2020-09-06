<?php

namespace App\Http\Controllers;

use App\Township;
use App\Region;
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
        $region = Region::get();
        $township    = Township::get();

        return view('townships.index', [
            'regions' => $region,'townships'=>$township
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region=Region::get();
        return view('townships.create',['regions'=>$region]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $township = new Township();
        $township->name = $request->name;
        $township->region_id=$request->region_id;

        $township->save();

        return redirect()->action('TownshipController@index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function show(Township $township)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $township = Township::find($id);
        //echo "Task Name ".$task->name;
        return view('townships.edit',['townships'=>Township::get(),'township'=>$township]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $t = Township::find($id);
        $t->name = $request->name;
        
        $t->save();
       
        return redirect('townships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Township::findOrFail($id)->delete();
        return redirect('townships');
    }
}
