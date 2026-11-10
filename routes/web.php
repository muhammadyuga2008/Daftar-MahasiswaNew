<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/posregis',[AuthController::class,'posregis'])->name('posregis');

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/mahasiswa',[MahasiswaController::class,'mahasiswa'])->name('mahasiswa');
    Route::get('/detail/{id}',[MahasiswaController::class,'detail'])->name('detail');
    Route::get('/daftar',[MahasiswaController::class,'daftar'])->name('daftar');
    Route::post('/postdaftar',[MahasiswaController::class,'postdaftar'])->name('postdaftar');
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');
    Route::get('/admin2',[AdminController::class,'admin2'])->name('admin2');
    Route::get('/edit/{pendaftar}',[AdminController::class,'edit'])->name('edit');
    Route::get('/lunas',[AdminController::class,'lunas'])->name('lunas');
    

});