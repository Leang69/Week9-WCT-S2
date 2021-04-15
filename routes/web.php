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
    return view('content.home');
});

Route::get('/about', function () {
    return view('content.about');
});

Route::get('/propertyGrid', function () {
    return view('content.propertyGrid');
});

Route::get('/blog', function () {
    return view('content.blog');
});

Route::get('/contact', function () {
    return view('content.contact');
});

Route::get('/propertySingle', function () {
    return view('content.propertySingle');
});
Route::get('/blogSingle', function () {
    return view('content.blogSingle');
});
Route::get('/agentGrid', function () {
    return view('content.agentGrid');
});
Route::get('/agentSingle', function () {
    return view('content.agentSingle');
});
