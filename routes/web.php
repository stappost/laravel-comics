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
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/{param}', function($id) {
    $comics = config('comics');
    $detail = NULL;
    foreach($comics as $comic){
        if($comic['id'] == $id){
            $detail = $comic;
        }
    }
    return view('details', compact('detail'));
})->name('details');