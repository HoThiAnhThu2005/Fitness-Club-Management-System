<?php

use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\CauHoiController;
use App\Http\Controllers\ChucNangController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HuanLuyenVienController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongTapController;
use App\Http\Controllers\YogaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Nhân Viên
Route::get('/admin/nhan-vien/get-data', [NhanVienController::class,'getData']);
Route::post('/admin/nhan-vien/add-data', [NhanVienController::class,'addData']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class,'updateData']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class,'delete']);
Route::post('/admin/nhan-vien/changeStatus', [NhanVienController::class,'changeStatus']);

//Khách Hàng
Route::get('/admin/khach-hang/get-data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/add-data', [KhachHangController::class,'addData']);
Route::post('/admin/khach-hang/update', [KhachHangController::class,'update']);
Route::post('/admin/khach-hang/destroy', [KhachHangController::class,'destroy']);
Route::post('/admin/khach-hang/changeStatus', [KhachHangController::class,'changeStatus']);
Route::post('/admin/khach-hang/kich-hoat', [KhachHangController::class,'kichHoat']);


//Chức vụ
Route::get('/admin/chuc-vu/getData',[ ChucVuController::class,'getData']);
Route::post('/admin/chuc-vu/add-data', [ChucVuController::class, 'addData']);
Route::post('/admin/chuc-vu/update', [ChucVuController::class, 'update']);
Route::post('/admin/chuc-vu/delete', [ChucVuController::class, 'destroy']);
Route::post('/admin/chuc-vu/change-status', [ChucVuController::class, 'changeStatus']);

//Chức Năng
Route::get('/admin/chuc-nang/getData', [ChucNangController::class, 'getData']);

//Phòng Tập
Route::get('/admin/phong-tap/get-data', [PhongTapController::class, 'getData']);
Route::post('/admin/phong-tap/add-data', [PhongTapController::class,'addData']);
Route::post('/admin/phong-tap/update', [PhongTapController::class,'update']);
Route::post('/admin/phong-tap/delete', [PhongTapController::class,'destroy']);
Route::post('/admin/phong-tap/change-status', [PhongTapController::class,'changeStatus']);

//Bài Viết
Route::get('/admin/bai-viet/get-data', [BaiVietController::class, 'getData']);



// ================Client================
//Trang Chủ
Route::get('/client/home-page', [HomePageController::class, 'homepageData']);

//Phòng tập
Route::get('/client/phong-tap/get-data', [PhongTapController::class,'getDataClient']);
//Yoga
Route::get('/client/phong-tap/yoga', [YogaController::class,'getDataClient']);

//Câu hỏi
Route::get('/client/cau-hoi/{loai_trang}', [CauHoiController::class, 'getDataByLoaiTrang']);
Route::get('/client/cau-hoi/home', [CauHoiController::class,'getDataHome']);
Route::get('/client/cau-hoi/yoga', [CauHoiController::class,'getDataYoga']);

//Chi tiết PT
Route::get('/client/trainer/get-data', [HuanLuyenVienController::class, 'getData']);
