<?php

use App\Models\Part;
use App\Models\User;
use App\Models\Admin;
use App\Models\Movie;
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
    Route::get('/comments', function () {
        return view('admin.comments');
    })->name('comments');
    
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/create', function () {
        return view('admin.createAdmin');
    })->name('craeteAdmin');

    Route::get('/admins', function () {
        return view('admin.admins');
    })->name('admins');

    Route::get('/edit/{id}', function () {
        return view('admin.edit-admin');
    })->name('editAdmin');


    Route::get('/roles', function () {
        return view('admin.roles');
    })->name('roles');


    Route::get('/edit/role/{id}', function () {
        return view('admin.editRole');
    })->name('editRole');


    Route::get('/permissions', function () {
        return view('admin.permissions');
    })->name('permissions');

    Route::get('/edit/permission/{id}', function () {
        return view('admin.editPermission');
    })->name('editPermission');

});


Route::name('user.')->group(function () {



});


Route::get('/seed',function(){
    // return view('admin.edit-admin');
    // $serie=Serie::with([ 'category' ,'parts.images','parts.videos'])->find(6);
    // return  dd($serie);

    // $user = User::with(['image'])->get()->dd();
    // $admins = Admin::withCount(['populars_questions'])->with(['image'])->find(10);
    //  dd($admins->image);
    return view('admin.add-item');
});



