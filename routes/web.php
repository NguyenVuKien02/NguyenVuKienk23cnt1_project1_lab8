<?php

use App\Http\Controllers\nvkMonHocController;
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

Route::get('/', function () {
    return view('welcome');
});
#MonHoc - Query Buider And CRUD
Route::get('/monhoc',[nvkMonHocController::class,'getMonHocs'])->name('monhoc.getMonHocs');
Route::get('/monhoc/detail/{mamh}',[nvkMonHocController::class,'getMonHocById'])->name('monhoc.detail');
# thêm mới
Route::get('/monhoc/create',[nvkMonHocController::class,'create'])->name('monhoc.create');
Route::post('/monhoc/create',[nvkMonHocController::class,'createSubmit'])->name('monhoc.createSubmit');
# sửa thông tin môn học
Route::get('/monhoc/edit/{mamh}',[nvkMonHocController::class,'edit'])->name('monhoc.edit');
Route::post('/monhoc/edit',[nvkMonHocController::class,'editSubmit'])->name('monhoc.editSubmit');
## Xóa thông tin môn học
Route::get('/monhoc/delete/{mamh}',[nvkMonHocController::class,'delete'])->name('monhoc.delete');
