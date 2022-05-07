<?php

namespace App\Http\Controllers\admin\Api;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;

class AdminReviewApiController extends Controller
{
    public function reviewdelete(Request $request){
        $review=Review::find($request->id);
        if(!$review)
        return response()->json([
            'message'=>'Sorry no Review with id='.$request->id.' Found',
        ]);
        $review->delete();
        $count=Review::all()->count();
         return response()->json([
             'message'=>'Review Deleted Successfull',
            'reviews'=>Review::with(['user','part.partable'])->paginate(40),
            'count'=>$count]);


  }
  public function getReviews()
  {
     $reviews=\App\Models\Review::with(['user','part.partable'])->paginate(40);

      return ReviewResource::collection($reviews);
  }
}
