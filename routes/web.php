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
    Route::get('/shimanekko', [App\Http\Controllers\ShimaneController::class, 'shimanekko']);

    Route::get('/matsue', [App\Http\Controllers\ShimaneController::class, 'matsue']);
    Route::get('/yasugi', [App\Http\Controllers\ShimaneController::class, 'yasugi']);
    Route::get('/okuizumo', [App\Http\Controllers\ShimaneController::class, 'okuizumo']);
    Route::get('/unnan', [App\Http\Controllers\ShimaneController::class, 'unnan']);
    Route::get('/izumo', [App\Http\Controllers\ShimaneController::class, 'izumo']);
    Route::get('/ohda', [App\Http\Controllers\ShimaneController::class, 'ohda']);
    Route::get('/iinan', [App\Http\Controllers\ShimaneController::class, 'iinan']);
    Route::get('/misato', [App\Http\Controllers\ShimaneController::class, 'misato']);
    Route::get('/kawamoto', [App\Http\Controllers\ShimaneController::class, 'kawamoto']);
    Route::get('/ohnan', [App\Http\Controllers\ShimaneController::class, 'ohnan']);
    Route::get('/gotsu', [App\Http\Controllers\ShimaneController::class, 'gotsu']);
    Route::get('/hamada', [App\Http\Controllers\ShimaneController::class, 'hamada']);
    Route::get('/masuda', [App\Http\Controllers\ShimaneController::class, 'masuda']);
    Route::get('/tsuwano', [App\Http\Controllers\ShimaneController::class, 'tsuwano']);
    Route::get('/yoshika', [App\Http\Controllers\ShimaneController::class, 'yoshika']);
    Route::get('/okinoshima', [App\Http\Controllers\ShimaneController::class, 'okinoshima']);
    Route::get('/nishinoshima', [App\Http\Controllers\ShimaneController::class, 'nishinoshima']);
    Route::get('/ama', [App\Http\Controllers\ShimaneController::class, 'ama']);
    Route::get('/chibu', [App\Http\Controllers\ShimaneController::class, 'chibu']);