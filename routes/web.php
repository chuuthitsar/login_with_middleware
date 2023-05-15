<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\UserDeleteController;

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
    return view('admin-main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/admin/edit/{id}', UserEditController::class)->name('admin.edit');
Route::get('/admin/delete/{id}', UserDeleteController::class)->name('admin.delete');
Route::post('/admin/post/{id}', PostController::class)->name('admin.post');
