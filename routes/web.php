<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeController;
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
    return view('index');
});

Route::get('/1', function () {
    return view('events');
});

Route::get('/2', function () {
    return view('about');
});

Route::get('/3', function () {
    return view('contact');
});

Route::get('/4', function () {
    return view('profile');
});

Route::get('/5', function () {
    return view('booking');
});

Route::group(['prefix' => 'employees'], function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/create', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::post('/{id}/edit', [EmployeeController::class, 'update'])->name('employees.update');
    Route::get('/{id}/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::post('/search', [EmployeeController::class, 'search'])->name('employees.search');
});

Route::group(['prefix' => 'rooms'], function () {
    Route::get('/', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/create', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('/{id}/edit', [RoomController::class, 'update'])->name('rooms.update');
    Route::get('/{id}/destroy', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::post('/search', [RoomController::class, 'search'])->name('rooms.search');
});

Route::get('/sign-in',[AuthController::class, 'showSignInPage'])->name('sign-in');

Route::post('/sign-in', [AuthController::class, 'signIn']);

Route::post('/sign-out', [AuthController::class, 'signOut']);

Route::get('/register', [AuthController::class, 'showRegisterPage']);

Route::post('/register', [AuthController::class, 'register']);
