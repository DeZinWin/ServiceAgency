<?php

namespace App\Http\Controllers;
use App\ServiceCategory;
use App\Township;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops=Shop::get();
        return view('shops.index',['shops'=>$shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $townships=Township::get();
        $servicecategories=ServiceCategory::get();
        return view('shops.create',['townships'=>$townships,'servicecategories'=>$servicecategories]);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'address'=>'required',
            'phone'=>'required',
            'township_id'=>'required',
            'servicecategory_id'=>'required',
            'image'=>'required',
            'openingtime'=>'required',
            'closingtime'=>'required'
            
        ]);
           $sh = new Shop;
    
            if($request->file()) {
                $fileName = time().'_'.$request->image->getClientOriginalName();
                //$filePath = $request->file('photo')->storeAs(public_path('uploads'), $fileName);
                $request->image->move(public_path('uploads'), $fileName);
               // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
               // $std->photopath = '/storage/' . $filePath;
               
                //$fileModel->save();
                $sh->Name=$request->name;
                $sh->Address=$request->address;
                $sh->Phone=$request->phone;
                $sh->township_id=$request->township_id;
                $sh->service_category_id=$request->servicecategory_id;
                $sh->Image=$fileName;
                $sh->OpeningTime=$request->openingtime;
                $sh->ClosingTme=$request->closingtime;
                $sh->save();
                return redirect()->action('ShopController@index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop,$id)
    {
        //
        $shop=Shop::find($id);
        $townships=TownShip::get();
        $servicecategories=ServiceCategory::get();
        return view('shops.edit',['shop'=>$shop,'townships'=>$townships,'servicecategories',$servicecategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
            'address'=>'required',
            'phone'=>'required',
            'township_id'=>'required',
            'servicecategory_id'=>'required',
            'image'=>'required',
            'openingtime'=>'required',
            'closingtime'=>'required'
            
        ]);
           $sh =Shop::find($id);
    
            if($request->file()) {
                $fileName = time().'_'.$request->image->getClientOriginalName();
                //$filePath = $request->file('photo')->storeAs(public_path('uploads'), $fileName);
                $request->image->move(public_path('uploads'), $fileName);
               // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
               // $std->photopath = '/storage/' . $filePath;
                $sh->Image=$fileName;
                //$fileModel->save();
            }    
                $sh->Name=$request->name;
                $sh->Address=$request->address;
                $sh->Phone=$request->phone;
                $sh->township_id=$request->township_id;
                $sh->service_category_id=$request->servicecategory_id;
                $sh->OpeningTime=$request->openingtime;
                $sh->ClosingTme=$request->closingtime;
                $sh->save();
                return redirect()->action('ShopController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop,$id)
    {
        //
        Shop::findorFail($id)->delete();
        return redirect()->action('ShopController@index');
    }
}
