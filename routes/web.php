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
    $array_comics = config('comics');
    $socials = config('social');
    $footer = config('footer');
    $footerList = config('footer-list');
    // dd($footerList);

    $data = [
        'comics' => $array_comics,
        'socials' => $socials,
        'socials_footer' => $footer,
        'footerList' => $footerList
    ];
    return view('home', $data);
});
