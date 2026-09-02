<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductLabelsController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\SupportInformationController;
use App\Http\Controllers\HeaderSettingController;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;

Route::get('/',[UserController::class,'firstPage']);
Route::get('/setting',[UserController::class,'setting']);

Route::get('/search', function(){
    return view('search');
});

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
    Route::post('/send/code/login','send_code_login')->name('send_code_login');
    Route::post('/send/code/signup','send_code_signup')->name('send_code_signup');
    Route::post('/remove/activation/code','removeActivationCode')->name('removeActivationCode');
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
    'controller'=>ProductController::class,
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
    'controller'=>CategoryController::class,
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
    'controller'=>BrandController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{brand}','single')->name('single');
    Route::get('/edit/{brand}','edit')->name('edit');
    Route::post('/update/{brand}','update')->name('update');
    Route::get('/delete/{brand}','delete')->name('delete');
});


route::group([
    'prefix'=>'logo',
    'as'=>'logo.',
    'controller'=>HeaderSettingController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});

route::group([
    'prefix'=>'hero',
    'as'=>'hero.',
    'controller'=>HeroController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/edit/{hero}','edit')->name('edit');
    Route::post('/update/{hero}','update')->name('update');
    Route::get('/delete/{hero}','/delete')->name('/delete');
});

route::group([
    'prefix'=>'support_information',
    'as'=>'support_information.',
    'controller'=>SupportInformationController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/edit/{support_information}','edit')->name('edit');
    Route::post('/update/{support_information}','update')->name('update');
    Route::get('/delete/{support_information}','delete')->name('delete');
});
route::group([
    'prefix'=>'advertisement',
    'as'=>'advertisement.',
    'controller'=>AdvertisementController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});
route::group([
    'prefix'=>'product_label',
    'as'=>'product_label.',
    'controller'=>ProductLabelsController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});


Route::get('check',function(){
    $result['check']=Auth::check();
    $result['user']=Auth::user();
    $result['user']->roles;
    dd($result);
});