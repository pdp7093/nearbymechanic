<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\RepairersController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAuthAfter;
use App\Http\Middleware\AdminAuthBefore;
use App\Http\Middleware\RepairerAuth;
use App\Http\Middleware\RepairerAuthAfter;
use App\Http\Middleware\UsernAuthAfter;
use App\Http\Middleware\UsernAuthBefore;
use Hoa\Exception\Group;
use Illuminate\Support\Facades\Route;



//----------------------------User Route ---------------------------------

//Signup & Login Route
Route::middleware('user.beforelogin')->group(function () {
    Route::get('/signup', [UserController::class, 'create'])->name("Signup");
    Route::post('/signup', [UserController::class, 'store'])->name("Register");
    Route::get('/Login', [UserController::class, 'login']);
    Route::post('/Login', [UserController::class, 'loginauth'])->name("Login.check");
});
//Profile
Route::middleware('user.afterlogin')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/Profile', [UserController::class, 'profile']);
    Route::get('/Edit/{id}', [UserController::class, 'edit']);
    Route::post('/Update/{id}', [UserController::class, 'update']);
    Route::get('/UserLogout', [UserController::class, 'logout']);
});

//----------------------------Repairer Route ------------------------------
Route::middleware('repairer.beforelogin')->group(function () {
    Route::get('/Repairer-Register', [RepairersController::class, 'create']);
    Route::post('/Repairer-Register', [RepairersController::class, 'store']);
    Route::get('/Repairer-Login', [RepairersController::class, 'login']);
    Route::post('/Repairer-Login', [RepairersController::class, 'loginauth']);

});

//
Route::middleware('repairer.afterlogin')->group(function () {


    Route::get('/Repairer-dashboard', [RepairersController::class, 'index']);


    //Profile
    Route::get('/Repairer-profile', [RepairersController::class, 'show']);
    Route::get('/Repairer-profile-edit/{id}', [RepairersController::class, 'edit']);
    Route::post('/Repairer-profile-edit/{id}', [RepairersController::class, 'update']);

    Route::get('/logout', [RepairersController::class, 'logout'])->name('logout');


    //--------------------------Garage Route ------------------------------------
   // web.php
Route::get('/garage.index', [GarageController::class, 'index'])->name('garage.index');

Route::get('/garage.insert', [GarageController::class, 'create'])->name('garage.insert');
});





//----------------------------Admin Route ---------------------------------
Route::middleware('admin.beforelogin')->group(function () {
    Route::get('/admin_login', [AdminController::class, 'create']);
    Route::post('/admin_login', [AdminController::class, 'store'])->name("AdminLogin");
});
Route::middleware('admin.afterlogin')->group(function () {
    Route::get('/Admin-Dashboard', [AdminController::class, 'show']);
    Route::get('/Logout', [AdminController::class, 'logout']);
});