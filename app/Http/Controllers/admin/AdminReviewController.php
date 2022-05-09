<?php

namespace App\Http\Controllers\admin;

use App\Events\DeleteReviewEvent;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Events\TestBrodcastEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReviewResource;

class AdminReviewController extends Controller
{
    public function __construct()
    {
        Auth::setDefaultDriver('admin');

    }

    public function test(){

        event(new TestBrodcastEvent(Auth::guard('admin')->user()));
        return 'Ok';

    }

    public function getjsonreviews()
    {

        $reviews=\App\Models\Review::with(['user','part.partable'])->paginate(40);
        $count=Review::all()->count();
        return response()->json([
            'reviews'=>$reviews,
            'count'=>$count
        ]);
    }
    public function reviews()
    {

        $reviews=\App\Models\Review::with(['user','part.partable'])->paginate(40);
        $count=Review::all()->count();


         return view('admin.reviews',compact('reviews','count'));
    }
    public function reviewsortbydate(){
         $reviews=Review::with('user')->orderBy('created_at','desc')->paginate(10);

         return $reviews;


    }
    public function reviewsortbyrating(){
        $reviews=Review::with('user')->orderBy('rating','desc')->paginate(10);
        $count=Review::all()->count();
        return $reviews;

   }
   public function reviewdelete(Request $request){
         Review::find($request->id)->delete();
         event(new DeleteReviewEvent('Review was Deleted!',Auth::guard('admin')->user()));

         $count=Review::all()->count();
          return ['reviews'=>Review::with(['user','part.partable'])->paginate(40),'count'=>$count];


   }
   public function getReviews()
   {
      $reviews=\App\Models\Review::with(['user','part.partable'])->paginate(40);


       return ReviewResource::collection($reviews);
   }
//    public function reviewsearch(Request $request){
//        $search=$request['searchview'];
//     $reviews=Review::with('user')->when($search,function($query,$search){
//         $query->where('title','like', '%'.$search."%")->orWhere('body','like', '%'.$search."%")->orWhere('rating','like', '%'.$search."%");

//     })->paginate(10);
//     return $reviews;

//    }
}
