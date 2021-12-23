<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
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
    return view('user/userindex');
});
//........... Admin panel ........................//

Route::get('adminindex',[AdminController::class,'adminindex']);

Route::get('sidebar', [AdminController::class, 'sidebar']);

Route::get('adminpolicy',[AdminController::class,'adminpolicy']);
Route::post('adminpolicy', [AdminController::class, 'addpolicy']);

Route::get('tabledit', [AdminController::class, 'policydata']);
Route::post('tabledit/action',[AdminController::class,'action'])->name('tabledit.action');

Route::get('adminuser', [AdminController::class,'adminuser']);

Route::get('leads',[AdminController::class,'leads']);

Route::get('adminlogin', [AdminController::class, 'adminlogin']);
Route::post('/adminindex', [AdminController::class, 'loginuser'])->name('adminindex');

Route::get('adminregister', [AdminController::class, 'adminregister']);
Route::post('/register-user', [AdminController::class, 'registeruser'])->name('register-user'); 

//--------------User----------------//
Route::get('userindex',[IndexController::class,'userindex']);
Route::post('add',[IndexController::class,'add']);


Route::get('/compare',[IndexController::class,'compare']);
Route::post('/save',[IndexController::class,'save'])->name('save');
Route::post('/compare',[IndexController::class,'compare'])->name('compare');
Route::post('/compareuser',[IndexController::class,'compareuser'])->name('compareuser');
Route::post('/compare',[IndexController::class,'searchByprice'])->name('compare');

Route::get('/marketlinked',[IndexController::class,'marketlinked']);
Route::post('/marketlinked',[IndexController::class,'marketlinked'])->name('marketlinked');


Route::get('/invest', [IndexController::class, 'invest']);
Route::get('/invest', [IndexController::class, 'invest'])->name('invest');
Route::get('invest/{id}', [IndexController::class, 'invest']);

Route::get('login',[AuthController::class,'login']);
Route::post('login',  [AuthController::class, 'postLogin'])->name('login'); 
Route::get('registration',[AuthController::class,'registration']);
Route::post('post-registration',[AuthController::class, 'postRegistration']); 
Route::get('logout',  [AuthController::class, 'logout']);

Route::get('header',  [IndexController::class, 'header']);
Route::get('abc',  [IndexController::class, 'abc']);



