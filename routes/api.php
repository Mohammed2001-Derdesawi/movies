<?php

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminReviewController;
use App\Http\Controllers\admin\Api\AdminReviewApiController;
use App\Http\Controllers\admin\Api\AuthAdminApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('admin')->get('dashboard/admin/reviews/get',[AdminReviewController::class,'getReviews']);

Route::middleware('admin_api')->group(function(){

    Route::prefix('/dashboard/admin/v1')->group(function (){
        Route::get('/',function(Request $request){
            return $request->user();
       });

        // Reviews

        Route::post('/review/delete/',[AdminReviewApiController::class,'reviewdelete']);
        Route::get('/reviews/get',[AdminReviewApiController::class,'getReviews']);

       //End Reviews
    });



   Route::get('/admins',[AuthAdminApiController::class,'admins']);


});

// Api Auth

Route::prefix('/admin/v1')->group(function(){
    Route::post('/login',[AuthAdminApiController::class,'signin']);
    Route::post('/{email}/logout',[AuthAdminApiController::class,'logout']);
    Route::post('/forgot/password',[AuthAdminApiController::class,'sendForgotPasswordEmail']);
    Route::get('/show/resetPassword/email={email}/token={token}',[AuthAdminApiController::class,'getshowresetPasswordform']);
    Route::post('/password/update',[AuthAdminApiController::class,'adminUpdatePassword']);
    Route::post('/register',[AuthAdminApiController::class,'signup'])->name('admin.register.api');

});

// End Api Auth


