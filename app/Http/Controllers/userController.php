<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;

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

     public function signUp(request $request){
        $users = new users;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->type = "1";
        $users->save();

        
        return response()->json([
            "status" => "Success"
        ], 200);
    }
}

