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
        $users->password = hash('sha256', $request->password);
        $users->type = "1";
        $users->save();

        
        return response()->json([
            "status" => "Success"
        ], 200);
    }

    public function getUserType(){
        $UserType = users::where("type")->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $UserType
        ], 200);
    }

    public function logIn(Request $request){
        $email = $request->email;
        $password = hash('sha256', $request->password);

        $user = users::where('email', $email)->first();
        
        $newUser = $user->id;
        if($password == $user->password){
            return response()->json([
                "status" => true,
                "id" => $newUser
            ], 200);
        }
        else{
            return response()->json([
                "status" => false,
            ], 200);
        }
    }
}

