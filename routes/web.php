<?php

use Illuminate\Support\Facades\Route;

// Superadmin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;

// Website Controller
use App\Http\Controllers\Website\WebsiteController;

// Logout
use App\Http\Controllers\LogoutController;


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


/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Website Router : Start
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/


Route::get('/', [WebsiteController::class, 'index']);


/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Website Router : End
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/



/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Superadmin Router : Start
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

Route::get('dashboard', [AdminController::class, 'index']);

// User Router
Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit', [UserController::class, 'edit']);
Route::get('dashboard/user/view', [UserController::class, 'view']);
Route::post('dashboard/user/submit', [UserController::class, 'insert']);
Route::post('dashboard/user/update', [UserController::class, 'update']);
Route::post('dashboard/user/softdelete', [UserController::class, 'softdelete']);
Route::post('dashboard/user/restore', [UserController::class, 'restore']);
Route::post('dashboard/user/delete', [UserController::class, 'delete']);

// Banner Router
Route::get('dashboard/banner', [BannerController::class, 'index']);
Route::get('dashboard/banner/add', [BannerController::class, 'add']);
Route::get('dashboard/banner/edit', [BannerController::class, 'edit']);
Route::get('dashboard/banner/view', [BannerController::class, 'view']);
Route::post('dashboard/banner/submit', [BannerController::class, 'insert']);
Route::post('dashboard/banner/update', [BannerController::class, 'update']);
Route::post('dashboard/banner/softdelete', [BannerController::class, 'softdelete']);
Route::post('dashboard/banner/restore', [BannerController::class, 'restore']);
Route::post('dashboard/banner/delete', [BannerController::class, 'delete']);


/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Superadmin Router : End
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Logout : Start
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

Route::get('/logout', [LogoutController::class, 'perform']);

// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|   Logout : Start
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

require __DIR__.'/auth.php';
