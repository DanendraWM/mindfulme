<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\pageController;
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
Route::get('/', [pageController::class, 'home']);
Route::post('/logout', [authController::class, 'logout']);
route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [authController::class, 'login'])->name('login');
    Route::get('/register', [authController::class, 'register']);
    Route::post('/register', [authController::class, 'regis']);
    Route::post('/login', [authController::class, 'authlogin']);

});

route::group(['middleware' => ['auth']], function () {
    Route::get('/cekkesehatan', [pageController::class, 'cekkesehatan']);
    Route::get('/formkesehatan', [pageController::class, 'formkesehatan']);
    Route::post('/formkesehatan', [pageController::class, 'datakesehatan']);
    Route::get('/diagnosa', [pageController::class, 'diagnosa']);
    Route::get('/obat', [pageController::class, 'obat']);
    Route::get('/nutrisi', [pageController::class, 'nutrisi']);
    Route::get('/apotek', [pageController::class, 'apotek']);
    Route::get('/dokter', [pageController::class, 'dokter']);
    Route::get('/profile', [pageController::class, 'profile']);
    Route::put('/editProfile/{id}', [pageController::class, 'editProfile'])->name('editProfile');
    Route::get('/janjitemu/{id}', [pageController::class, 'janjitemu']);
    Route::post('/janjitemu', [pageController::class, 'saveJanjitemu']);
    Route::get('/jadwal', [pageController::class, 'jadwal']);
});

route::group(['middleware' => ['auth', 'checkLevel:admin']], function () {
    Route::get('/listdokter', [adminController::class, 'admin']);
    Route::post('/listdokter/add/dokter', [adminController::class, 'add']);
    Route::delete('/listdokter/delete/dokter/{id}', [adminController::class, 'delete'])->name('deleteDokter');
    Route::put('/listdokter/edit/dokter/{id}', [adminController::class, 'edit'])->name('editDokter');
    Route::get('/jadwaljanji', [adminController::class, 'jadwalJanji'])->name('jadwaljanji');
});
