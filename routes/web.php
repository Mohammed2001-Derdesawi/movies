<?php

use App\Events\TestBrodcast;
use App\Models\Tag;
use App\Models\Part;
use App\Models\Movie;
use App\Models\Serie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Controllers\admin\AdminReviewController;
use App\Models\Taggable;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/ahmed',[AdminReviewController::class,'test'])->name('ahmed');
Route::get('/', function () {
    return view('main.index');
})->name('main');




Route::name('user.')->group(function () {



});


Route::get('/seed',function(){
    $serie=Tag::with('series')->find(2);
    return  dd($serie);

})->name('.seed');




//  Start Admin (Register ,Login and Forgot)pages
Route::get('/admin/signin',[AuthAdminController::class,'loginpage'])->name('admin.login');
Route::get('/admin/logout',[AuthAdminController::class,'logout'])->name('admin.logout');

Route::get('/admin/signup',[AuthAdminController::class,'registerpage'])->name('admin.signup');
Route::post('/admin/login',[AuthAdminController::class,'signin']);
Route::post('/admin/register',[AuthAdminController::class,'signup']);

Route::get('/admin/forgot',[AuthAdminController::class,'getforgotpasswordpage']);
Route::post('/admin/forgot/password',[AuthAdminController::class,'sendForgotPasswordEmail']);
Route::get('/admin/show/resetPassword/email={email}/token={token}',[AuthAdminController::class,'getshowresetPasswordform'])->name('admin.showresetpasswordform');
Route::post('/admin/password/update',[AuthAdminController::class,'adminUpdatePassword'])->name('admin.password.update');

 // End   Admin (Register ,Login and Forgot) pages



 Route::middleware('admin')->name('admin.')->prefix('/dashboard/admin')->group(function () {
     // Start Admin Reviews Dashboard
    Route::get('/reviews',[AdminReviewController::class,'reviews'])->name('reviews');
    // Route::get('/reviews/sortbydate/',[AdminReviewController::class,'reviewsortbydate']);
    // Route::get('/reviews/sortbyrating/',[AdminReviewController::class,'reviewsortbyrating']);
    // Route::get('review/serach/',[AdminReviewController::class,'reviewsearch']);
    Route::post('/review/delete/',[AdminReviewController::class,'reviewdelete']);
 // End Admin Reviews Dashboard
});




