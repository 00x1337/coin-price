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
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return view('welcome',compact('content'));
});
Route::get('/api_u', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return view('api');
});
Route::get('/api', function () {
//    This REQ GET price
    $client = new \GuzzleHttp\Client();
//    this API
    $res = $client->get('https://api.coinstats.app/public/v1/coins?skip=0&limit=10');
    $content = (string) $res->getBody();
//    RET
    $content = json_decode($content, true);
    return ($content);
});
