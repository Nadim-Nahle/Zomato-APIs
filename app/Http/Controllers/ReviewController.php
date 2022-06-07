<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function addReview(Request $request){
        $review = new review;
        $review->name = $request->name;
        $review->message = $request->message;
        $review->rating = $request->rating;
        $review->save();
        
        return response()->json([
            "status" => "Success"
        ], 200);
    }

    public function getReviews($id = null){
        $reviews = Review::all();
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ],200);
     }

     public function getReview($id = null){
        if($id){
            $review = Review::find($id);
        }
        else{
            $review = Review::all();
        }
        
        return response()->json([
            "status" => "success",
            "reviews" => $review
        ],200);
     }

     public function deleteReview(Request $request){
         
        Review::where('id',$request->id)->delete();
        
        return response()->json([
            "success" => true,
        ], 200);
    }
}


