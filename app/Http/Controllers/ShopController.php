<?php

namespace App\Http\Controllers;

use App\KindOfProduct;
use App\Mall;
use App\Shop;
use App\ShopKindProduct;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malls=Mall::all();
        $kindofproducts=KindOfProduct::all();
        return view('shop.save',compact('malls','kindofproducts'));
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
    public function store(Request $request,Shop $shop)
    {
        $shop->mall_id =$request->mall_id;
        $shop->sector_id =$request->sector_id;
        $shop->zona =$request->zona;
        $shop->shopn =$request->shopn;
        $shop->shopname =$request->shopname;
        $shop->owner =$request->owner;
        $shop->von =$request->von;
        $shop->fin =$request->fin;
        $shop->mobil =$request->mobil;
        $shop->mail =$request->mail;
        $shop->date =$request->date;
        $shop->muqvilen =$request->muqvilen;
        $shop->image =$request->image;
        $shop->type =0;

        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $shop->image = $name;
        }

        $shop->save();

        foreach ($request->kindof as $kind){
            $shopKindProduct =new ShopKindProduct();
            $shopKindProduct->shop_id=$shop->id;
            $shopKindProduct->kindofproduct=$kind;
            $shopKindProduct->save();
        }
        return back();
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
        //
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
