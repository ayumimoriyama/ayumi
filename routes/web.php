<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/index', [App\Http\Controllers\ItemController::class, 'index'])->name('index');;
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::get('/item/{id}',[App\Http\Controllers\ItemController::class, 'destroyById']);

    Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('user.edit');
    Route::post('/UserEdit/{id}', [App\Http\Controllers\ItemController::class, 'UserEdit'])->name('user.update');

    Route::get('/shimane', [App\Http\Controllers\ShimaneController::class, 'shimane'])->name('map');