<?php

namespace App\Http\Controllers;

use App\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories = ServiceCategory::get();

        return view('service_categories.index', [
            'service_categories' => $service_categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_categories=ServiceCategory::get();
        return view('service_categories.create',['service_categories'=>$service_categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service_categories = new ServiceCategory();
        $service_categories->Name = $request->name;
        $service_categories->Description = $request->description;

        $service_categories->save();

        return redirect()->action('ServiceCategoryController@index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCategory $serviceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_categories = ServiceCategory::find($id);
        //echo "Task Name ".$task->name;
        return view('service_categories.edit',['service_categories'=>ServiceCategory::get(),'service_category'=>$service_categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $t = ServiceCategory::find($id);
        $t->Name = $request->name;
        $t->Description = $request->description;
        $t->save();
       
        return redirect('service_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceCategory::findOrFail($id)->delete();
        return redirect('service_categories');
    }
}
