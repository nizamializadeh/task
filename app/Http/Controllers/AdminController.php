<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops=Shop::all();
        return view('admin.index',compact('shops'));
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = DB::table('shops')
            ->join('malls', 'malls.id', '=', 'shops.mall_id')
            ->join('sectors', 'sectors.id', '=', 'shops.sector_id')
            ->where('shops.id', $id)
            ->select('shops.*', 'malls.name', 'sectors.name as sectorname')
            ->first();

        $kindofproducts = DB::table('shop_kind_products')
            ->join('shops', 'shops.id', '=', 'shop_kind_products.shop_id')
            ->join('kind_of_products', 'kind_of_products.id', '=', 'shop_kind_products.kindofproduct')
            ->where('shops.id', $id)
            ->select(  'kind_of_products.name as name')
            ->get();

        return view('admin.show',compact('shop','kindofproducts'));


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
