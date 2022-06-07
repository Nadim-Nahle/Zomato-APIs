<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class userController extends Controller
{
    public function getUsers($id = null){
        $users = users::all();
        return response()->json([
            "status" => "success",
            "users" => $users
        ],200);
     }
    public function getUser($id = null){
        if($id){
            $user = users::find($id);
        }
        else{
            $user = users::all();
        }
        
        return response()->json([
            "status" => "success",
            "users" => $user
        ],200);
     }
}

