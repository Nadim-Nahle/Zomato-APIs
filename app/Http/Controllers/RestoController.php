<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller 
{
    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->description = $request->description;
        $resto->save();
        
        return response()->json([
            "status" => "Success"
        ], 200);
    }

    public function getRestos($id = null){
        $restos = restaurant::all();
        return response()->json([
            "status" => "success",
            "restaurants" => $restos
        ],200);
     }

     public function getResto($id = null){
        if($id){
            $resto = restaurant::find($id);
        }
        else{
            $resto = restaurant::all();
        }
        
        return response()->json([
            "status" => "success",
            "restaurants" => $resto
        ],200);
     }
}
