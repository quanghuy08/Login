<?php

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
Route::get('/users/login', [UserController::class, 'login']);
Route::post('/users/login', [UserController::class, 'logins']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/page1', [LayoutController::class, 'page1']);
Route::get('demo/page2', [LayoutController::class, 'page2']);
Route::get('demo/page3', [LayoutController::class, ' page3']);

Route::get('/index', [OctopusMasterController::class, 'index']);
Route::get('/list', [OctopusMasterController::class, 'list']);
Route::get('/form', [OctopusMasterController::class, 'form']);
Route::get('/calendar', [OctopusMasterController::class, 'calendar']);
Route::get('/uiElementsModals', [OctopusMasterController::class, 'uiElementsModals']);
