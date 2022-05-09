<?php

namespace App\Http\Controllers\admin\Api;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Events\DeleteReviewEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReviewResource;

class AdminReviewApiController extends Controller
{
    public function reviewdelete(Request $request){
        $review=Review::find($request->id);
        if(!$review)
        return response()->json([
            'message'=>'Sorry no Review Found with id='.$request->id,
        ]);

        $review->delete();
        $count=Review::all()->count();
        event(new DeleteReviewEvent('Review was Deleted!',Auth::guard('admin_api')->user()));

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
