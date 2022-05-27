<?php

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
    return view('welcome');
});

Route::get('/reservation', function (){
    return view('reservation');
} ) ;
Route::get('/aboutus', function (){
    return view('aboutus');
});
Route::get('/event', function (){
    return view('event');
});
Route::get('/gallery', function (){
    return view('gallery');
});

    Route::get('/service', function (){
        return view('service');}
    );

    Route::get('/contactus', function (){
        return view('contactus');}
    );

    Route::get('/contactus', function (){
        return view('contactus');});

