<?php

use App\Http\Controllers\categoriesController;
use App\Models\categories;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [categoriesController::class, 'index'])->name('index');

    Route::get('/create', [categoriesController::class, 'create'])->name('create');
    Route::post('/store', [categoriesController::class, 'store'])->name('store');


    Route::get('/edit/{id}', [categoriesController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [categoriesController::class, 'update'])->name('update');

    Route::get('/delete/{id}', [categoriesController::class, 'delete'])->name('delete');

    // Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
    // Route::post('/edit/{id}', [UserController::class, 'postEdit'])->name('post-edit');
    // Route::get('/delete/{id}', [UserController::class, 'deleteData'])->name('delete');
    //Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
});
