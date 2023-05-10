<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', 'UploadController@upload');

Route::get('/test-csrf-token', function () {
    return csrf_token();
});

Route::post('/test-csrf', function (Illuminate\Http\Request $request) {
    return response()->json(['message' => 'CSRF token verified']);
})->middleware('web', 'verified');

Route::post('/protected-endpoint', function (Illuminate\Http\Request $request) {
    return response()->json(['message' => 'Protected endpoint accessed successfully']);
})->middleware('web', 'verified');


