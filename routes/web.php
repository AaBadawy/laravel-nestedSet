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
    $categories = \App\Models\Category::get();
    return view('welcome', ['categories' => $categories]);
});

Route::resource('category' , 'CategoriesController');
Route::resource('team' , 'TeamsController');
Route::get('leader-teams/{leader_id}' , 'TeamsController@TeamsForLeader');
