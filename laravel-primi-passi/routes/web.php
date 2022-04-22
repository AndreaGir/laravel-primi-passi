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
    $team = [
        [
            "name" => "andrea"
        ],
        [
            "name" => "marco"
        ],
        [
            "name" => "franco"
        ],
    ];
    return view('home' , [
        "team" => $team
    ]);
    
});


Route::get('/contact', function() {
    return view('contact');
});