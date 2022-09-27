<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function set(Request $request)
    {
        $select_id=$request->input('select_id');
        $select2=Sector::where('mall_id','=',$select_id)->get();

        return response()->json($select2);
    }
}
