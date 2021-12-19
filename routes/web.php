<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationCheck;
use App\Http\Controllers\PagesController;

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
    return view('pages.login');
});

//login and registration
Route::get('/login', [LoginController::class,'login'])->name('loginCheck');
Route::post('/login', [LoginController::class,'loginCheck'])->name('loginCheck');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/registration', [RegistrationCheck::class,'registration'])->name('registrationCheck');
Route::post('/registration', [RegistrationCheck::class,'registrationCheck'])->name('registrationCheck');



Route::get('/flatOwner/Dash/profile', [PagesController::class,'flatOwnerDash'])->name('flatOwnerDash')->middleware('ValidUser');
Route::post('/flatOwner/Dash/profile', [PagesController::class,'flatOwnerProfileUpdate'])->name('flatOwnerDash');



Route::get('/flatOwner/advertisement', [PagesController::class,'advertisement'])->name('advertisement');
Route::post('/flatOwner/advertisement', [PagesController::class,'advertisementCheck'])->name('advertisement');
Route::get('/flatOwner/advertisement/list', [PagesController::class,'advertisementlist'])->name('advertisementlist')->middleware('ValidUser');
Route::get('/flatOwner/advertisement/details/{id}', [PagesController::class,'advertisementdetails'])->name('advertisementdetails');
Route::get('/flatOwner/advertisement/edit/{id}', [PagesController::class,'advertisementedit'])->name('advertisementedit');
Route::post('/flatOwner/advertisement/edit/{id}', [PagesController::class,'advertisementupdate'])->name('advertisementedit');
Route::get('/flatOwner/advertisement/delete/{id}', [PagesController::class,'advertisementdelete'])->name('advertisementdelete');
Route::post('/flatOwner/advertisement/delete/{id}', [PagesController::class,'advertisementdel'])->name('advertisementdelete');


Route::get('/flatOwner/ChangeInfo', [PagesController::class,'changeinfo'])->name('changeinfo')->middleware('ValidUser');
Route::get('/flatOwner/ChangeInfoupdate/{id}', [PagesController::class,'changeinfoupdate'])->name('changeinfoupdate');
Route::post('/flatOwner/ChangeInfoupdate/{id}', [PagesController::class,'changeinfo'])->name('changeinfoupdate');



Route::get('/admin/Dash', [PagesController::class,'adminDash'])->name('adminDash')->middleware('ValidUser');
Route::get('/bachelor/Dash', [PagesController::class,'bachelorDash'])->name('bachelorDash')->middleware('ValidUser');
Route::get('/manager/Dash', [PagesController::class,'managerDash'])->name('managerDash')->middleware('ValidUser');



