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
}
