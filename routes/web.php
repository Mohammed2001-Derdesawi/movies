<?php

use App\Models\Movie;
use App\Models\Part;
use App\Models\Serie;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main.index');
});

Route::name('admin.')->prefix('/dashboard/admin')->group(function () {

});


Route::name('user.')->group(function () {


});


Route::get('/seed',function(){
    $serie=Serie::with([ 'category' ,'parts.images','parts.videos'])->find(6);
    return  dd($serie);

});
