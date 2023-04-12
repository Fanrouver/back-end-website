<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');

    // Route::get('/', [HomeController::class, 'index'])->name('index');
    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('auth')->group(function () {
        Route::get('change-password', [ChangePasswordController::class, 'changePasswordForm'])->name('auth.changePasswordForm');
        Route::post('change-password', [ChangePasswordController::class, 'changePassword'])->name('auth.changePassword');
    });

    Route::prefix('setup')->group(function () {
        Route::group(['prefix' => 'permissions', 'middleware' => ['role:superuser|superadmin']], function () {
            Route::get('/', [PermissionController::class, 'index'])->name('permissions.index');
            Route::post('/paginate', [PermissionController::class, 'paginate'])->name('permissions.paginate');
            Route::get('/create', [PermissionController::class, 'create'])->name('permissions.create');
            Route::post('/', [PermissionController::class, 'store'])->name('permissions.store');
            Route::get('/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
            Route::put('/{permission}/edit', [PermissionController::class, 'update'])->name('permissions.update');
            Route::get('/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
        });

        Route::group(['prefix' => 'roles', 'middleware' => ['role:superuser|superadmin']], function () {
            Route::get('/', [RoleController::class, 'index'])->name('roles.index');
            Route::post('/paginate', [RoleController::class, 'paginate'])->name('roles.paginate');
            Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
            Route::post('/', 'RoleController@store')->name('roles.store');
            Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
            Route::put('/{role}/edit', [RoleController::class, 'update'])->name('roles.update');
            Route::get('/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
        });
    });

    Route::group(['prefix' => 'users', 'middleware' => ['role:superuser|superadmin']], function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/paginate', [UserController::class, 'paginate'])->name('users.paginate');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/{user}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });
});
