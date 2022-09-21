<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\BorrowController;
use App\Models\Items;
use App\Models\Borrows;
use App\Models\Orders;

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


//Landing Page

;


Route::controller(UserController::class)->group(function() {
    Route::get('/register', 'register');
    Route::get('/index', 'main');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('login/process', 'process')->name('check');
    Route::post('/logout', 'logout');
    Route::post('/store', 'store');
});


Route::get('/', [ItemController::class, 'dashboardOverview1'])->name('dashboard-overview-1')->middleware('auth');

// Item Route

Route::get('/item-list', [ItemController::class, 'index'])->name('create-item');
Route::post('/add/item', [ItemController::class, 'store'])->name('item.create');
Route::post('updateitem', [ItemController::class, 'edit'])->name('item.edit');
Route::post('/deleteitem', [ItemController::class, 'destroy'])->name('item.destroy');

// Borrow Route

Route::get('/borrow-list', [BorrowController::class, 'index'])->name('borrowlist');
Route::post('/add/borrow', [BorrowController::class, 'store'])->name('borrow.create');
Route::post('updateborrow', [BorrowController::class, 'edit'])->name('borrow.edit');
Route::post('/deleteborrow', [BorrowController::class, 'destroy'])->name('borrow.destroy');

// Request Route

Route::get('/request-list', [OrderController::class, 'index'])->name('requestlist');
Route::post('/request/add', [OrderController::class, 'store'])->name('request.create');
Route::post('updaterequest', [OrderController::class, 'edit'])->name('request.edit');
Route::post('/deleterequest', [OrderController::class, 'destroy'])->name('request.destroy');



