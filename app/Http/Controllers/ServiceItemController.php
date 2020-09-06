<?php

namespace App\Http\Controllers;

use App\ServiceItem;
use App\ServiceCategory;
use Illuminate\Http\Request;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories = ServiceCategory::get();
        $service_item    = ServiceItem::get();

        return view('service_items.index', [
            'service_categories' => $service_categories,'service_items'=>$service_item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $service_categories=ServiceCategory::get();
        return view('service_items.create',['service_categories'=>$service_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service_item = new ServiceItem();
        $service_item->Name = $request->name;
        $service_item->service_category_id=$request->service_category_id;

        $service_item->save();

        return redirect()->action('ServiceItemController@index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceItem $serviceItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_item = ServiceItem::find($id);
        //echo "Task Name ".$task->name;
        return view('service_items.edit',['service_items'=>ServiceItem::get(),'service_item'=>$service_item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $t = ServiceItem::find($id);
        $t->Name = $request->name;
        
        $t->save();
       
        return redirect('service_items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceItem::findOrFail($id)->delete();
        return redirect('service_items');
    }
}
