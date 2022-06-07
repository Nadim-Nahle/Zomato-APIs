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
}
