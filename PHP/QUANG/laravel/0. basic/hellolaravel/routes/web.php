<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get("foo/bar", function(){
    return 'Hello World';
});
Route::get('user/{id}', function ($id) {
    dd($id);
})->where('id', '[0-9]+');

### Sử dụng dependecies trong laravel
Route::get('user/{id}', function ($id, Request $request) {
    dd($request->getMethod());
})->where('id', '[0-9]+');


Route::get('products/{id}', [ProductController::class, 'showProducts']);