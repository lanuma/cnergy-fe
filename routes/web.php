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
    return view('pages.homepage-mk-bandung');
});

Route::get('/article', function () {
    return view('pages.article-paging-mk-bandung');
});

Route::get('/index-tag-paging', function () {
    return view('pages.index-tag-paging-mk-bandung');
});

Route::get('/index-paging', function () {
    return view('pages.index-paging-mk-bandung');
});

Route::get('/not-found', function () {
    return view('pages.not-found-mk-bandung');
});