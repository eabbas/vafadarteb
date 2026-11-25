<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisionController;
use App\Http\Controllers\ReferralCodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductLabelsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StaticUserController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\DiscuntCodeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupportInformationController;
use App\Http\Controllers\HeaderSettingController;
use App\Http\Controllers\AddressController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/getFilters', [ProductController::class, 'getFilters']);

Route::post('/uploadImage',[CategoryController::class,'uploadImage']);
Route::post('/uploadImage',[BrandController::class,'uploadImage']);
Route::post('/uploadImage',[ProductController::class,'uploadImage']);

