<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\RoleController;
use App\Http\controllers\PermisionController;
use App\Http\controllers\UserController;
use App\Http\controllers\categoryController;
use App\Http\controllers\productController;
use App\Http\controllers\brandController;
use App\Http\middleware\checkUserExist;
use App\Http\middleware\checkAuthUser;


Route::group([
    'prefix'=>'user',
    'as'=>'user.',
    'controller'=>UserController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::post('/createUser','createUser')->name('createUser');
    Route::get('/list','list')->name('list');
    Route::get('/single/{user}','single')->name('single');
    Route::get('/edit/{user}','edit')->name('edit');
    Route::post('/update/{user}','update')->name('update');
    Route::get('/delete/{user}','delete')->name('delete');
    // Route::post('/edit/profile','editProfile')->name('editProfile');
    Route::post('/edit/profile/{user}','editProfile')->name('editProfile');
    Route::post('/change/avatar/{user}','changeAvatar')->name('changeAvatar');
    Route::post('/change/password/{user}','changePassword')->name('changePassword');

    Route::get('/login/page','loginPage')->name('loginPage')->middleware(checkAuthUser::class);
    Route::post('/login','login')->name('login')->middleware(checkUserExist::class);
    Route::post('/signup','signup')->name('signup');
    Route::get('/logOut','logOut')->name('logOut');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/profile','profile')->name('profile');

});

Route::group([
    'prefix'=>'role',
    'as'=>'role.',
    'controller'=>RoleController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::post('/update','update')->name('update');
    Route::get('/delete/{role}','delete')->name('delete');
    Route::get('/getRole/{role}','getRole')->name('getRole');
    Route::get('/get/role/users/{role}','getUsers')->name('getUsers');
    Route::get('/get/role/permisions/{role}','getpermisions')->name('getpermisions');
});
Route::group([
    'prefix'=>'permision',
    'as'=>'permision.',
    'controller'=>PermisionController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/edit/{permision}','edit')->name('edit');
    Route::post('/update/{permision}','update')->name('update');
    Route::get('/delete/{permision}','delete')->name('delete');
    Route::get('/getPermision/{permision}','getPermision')->name('getPermision');
    Route::get('/get/permision/users/{permision}','getUsers')->name('getUsers');
    Route::get('/get/permision/roles/{permision}','getroles')->name('getroles');

});





route::group([
    'prefix'=>'product',
    'as'=>'product.',
    'controller'=>productController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/product/{product}','single')->name('single');
    Route::get('/single/package/{package}','singlePackage')->name('singlePackage');
    Route::get('/edit/{product}','edit')->name('edit');
    Route::post('/update/{product}','update')->name('update');
    Route::get('/delete/{product}','delete')->name('delete');
    Route::get('category/attributes/{category}','categoryAttributes')->name('categoryAttributes');
    Route::get('/packages/{product}','packages')->name('packages');
    Route::get('/attributes/{product}','attributes')->name('attributes');
});

route::group([
    'prefix'=>'category',
    'as'=>'category.',
    'controller'=>categoryController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{category}','single')->name('single');
    Route::get('/edit/{category}','edit')->name('edit');
    Route::post('/update/{category}','update')->name('update');
    Route::get('/delete/{category}','delete')->name('delete');
});


route::group([
    'prefix'=>'brand',
    'as'=>'brand.',
    'controller'=>brandController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{brand}','single')->name('single');
    Route::get('/edit/{brand}','edit')->name('edit');
    Route::post('/update/{brand}','update')->name('update');
    Route::get('/delete/{brand}','delete')->name('delete');
});


Route::get('check',function(){
    $result['check']=Auth::check();
    $result['user']=Auth::user();
    $result['user']->roles;
    dd($result);
});