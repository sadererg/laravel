<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ychController;
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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/u20', function () {
    return view('u20');
});
Route::get('/app', function () {
    return view('app');
});
Route::get('ych',[ychController::class,'Ych']);
//Route::get('ych', function () {
   // $posts = App\Models\ych::all();
    //return view('ych',compact('posts'));
//});

