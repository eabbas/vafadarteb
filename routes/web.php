<?php

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
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use App\Http\Middleware\authUser;
use App\Http\Middleware\checkAccess;
use App\Models\role_permision;



Route::get('/permision',function(){
    for ($i=0; $i <50 ; $i++) { 
        role_permision::create([
            'role_id'=>2,
            'permision_id'=>$i,
        ]);
    }
});

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
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class . ':user_create')->name('create');
    Route::post('/store','store')->name('store')->middleware(authUser::class);
    Route::post('/createUser','createUser')->middleware(authUser::class)->middleware(checkAccess::class . ':user_createUser')->name('createUser');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':user_list')->name('list');
    Route::get('/single/{user}','single')->middleware(authUser::class)->middleware(checkAccess::class . ':user_single')->name('single');
    Route::get('/edit/{user}','edit')->middleware(authUser::class)->middleware(checkAccess::class . ':user_edit')->name('edit');
    Route::post('/update/{user}','update')->middleware(authUser::class)->middleware(checkAccess::class . ':user_edit')->name('update');
    Route::get('/delete/{user}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':user_delete')->name('delete');
    // Route::post('/edit/profile','editProfile')->name('editProfile');
    Route::post('/edit/profile/{user}','editProfile')->middleware(checkAccess::class . ':user_single')->name('editProfile');
    Route::post('/change/avatar/{user}','changeAvatar')->name('changeAvatar');
    Route::post('/change/password/{user}','changePassword')->name('changePassword');

    Route::get('/login/page','loginPage')->name('loginPage')->middleware(checkAuthUser::class);
    Route::post('/login','login')->name('login')->middleware(checkUserExist::class);
    Route::post('/signup','signup')->name('signup');
    Route::get('/logOut','logOut')->name('logOut');
    Route::get('/dashboard','dashboard')->name('dashboard')->middleware(authUser::class);
    Route::get('/profile','profile')->name('profile')->middleware(authUser::class);
    Route::post('/send/code/login','send_code_login')->name('send_code_login');
    Route::post('/send/code/signup','send_code_signup')->name('send_code_signup');
    Route::post('/remove/activation/code','removeActivationCode')->name('removeActivationCode');
    // Route::post('/signup_signin','signup_signin')->name('signup_signin');
    Route::post('/signup_with_ajax','signup_with_ajax')->name('signup_with_ajax');
    Route::post('/signin_with_ajax','signin_with_ajax')->name('signin_with_ajax');
    Route::post('/checkUser','checkUser')->name('checkUser');
    Route::any('/cartInformation','cartInformation')->name('cartInformation');
    Route::any('/innerDashboard','innerDashboard')->name('innerDashboard');
    Route::any('/getHeaderSubCats/{category}','getHeaderSubCats')->name('getHeaderSubCats');
    Route::any('/aboutMy','aboutMy')->name('aboutMy');
});
Route::group([
    'prefix'=>'role',
    'as'=>'role.',
    'controller'=>RoleController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class . ':role_create')->name('create');
    Route::post('/store','store')->middleware(authUser::class)->middleware(checkAccess::class . ':role_create')->name('store');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':role_list')->name('list');
    Route::post('/update','update')->middleware(authUser::class)->middleware(checkAccess::class . ':role_edit')->name('update');
    Route::get('/delete/{role}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':role_delete')->name('delete');
    Route::get('/getRole/{role}','getRole')->name('getRole');
    Route::get('/get/role/users/{role}','getUsers')->name('getUsers');
    Route::get('/get/role/permisions/{role}','getpermisions')->name('getpermisions');
});
Route::group([
    'prefix'=>'permision',
    'as'=>'permision.',
    'controller'=>PermisionController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->name('create');
    Route::post('/store','store')->middleware(authUser::class)->name('store');
    Route::get('/list','list')->middleware(authUser::class)->name('list');
    Route::get('/edit/{permision}','edit')->middleware(authUser::class)->name('edit');
    Route::post('/update/{permision}','update')->middleware(authUser::class)->name('update');
    Route::get('/delete/{permision}','delete')->middleware(authUser::class)->name('delete');
    Route::get('/getPermision/{permision}','getPermision')->name('getPermision');
    Route::get('/get/permision/users/{permision}','getUsers')->name('getUsers');
    Route::get('/get/permision/roles/{permision}','getroles')->name('getroles');

});
route::group([
    'prefix'=>'product',
    'as'=>'product.',
    'controller'=>ProductController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class .':product_create')->name('create');
    Route::post('/store','store')->middleware(authUser::class)->middleware(checkAccess::class . ':product_create')->name('store');
    Route::any('/searchProduct','searchProduct')->middleware(authUser::class)->name('searchProduct');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':product_list')->name('list');
    Route::get('/single/product/{product}','single')->middleware(authUser::class)->middleware(checkAccess::class . ':product_single')->name('single');
    Route::get('/single/package/{package}','singlePackage')->middleware(authUser::class)->name('singlePackage');
    Route::get('/edit/{product}','edit')->middleware(authUser::class)->middleware(checkAccess::class . ':product_edit')->name('edit');
    Route::post('/update/{product}','update')->middleware(authUser::class)->middleware(checkAccess::class . ':product_edit')->name('update');
    Route::get('/delete/{product}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':product_delete')->name('delete');
    Route::get('category/attributes/{category}','categoryAttributes')->name('categoryAttributes');
    Route::get('/packages/{product}','packages')->name('packages');
    Route::get('/attributes/{product}','attributes')->name('attributes');
    // Route::post('/get/filtered/products','getFilteredProducts')->name('getFilteredProducts');
    Route::post('/get/filtered/products','getFilters')->name('getFilters');

    
    Route::get('/client/product/{product}','client_pro_single')->name('client_pro_single');
    Route::get('/header/test','header_test')->name('header_test');

    Route::get('/get/noAuth/{product}','getNoAuthProduct')->name('getNoAuthProduct');
});
route::group([
    'prefix'=>'cart',
    'as'=>'cart.',
    'controller'=>CartController::class,
],function(){    
    Route::post('/store/cart','store')->name('store');
    Route::post('/update/cart/{cart}','update')->name('update');
    Route::get('/delete/cart/{cart}','delete')->name('delete');
    Route::get('/list/cart','list')->name('list');
    Route::get('/user/cart/list','userCartList')->name('userCartList');
    Route::post('/checkOutForm','checkOutForm')->name('checkOutForm');
});
route::group([
    'prefix'=>'order',
    'as'=>'order.',
    'controller'=>OrderController::class,
],function(){    
    Route::post('/store/order','store')->name('store');
    Route::get('/list/order','list')->name('list');
    Route::get('/edit/order','edit')->name('edit');
    Route::post('/update/order','update')->name('update');
    Route::get('/delete/order','delete')->name('delete');
});
route::group([
    'prefix'=>'category',
    'as'=>'category.',
    'controller'=>CategoryController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class . ':category_create')->name('create');
    Route::post('/store','store')->middleware(authUser::class)->middleware(checkAccess::class . ':category_create')->name('store');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':category_list')->name('list');
    Route::get('/single/{category}','single')->middleware(authUser::class)->middleware(checkAccess::class . ':category_single')->name('single');
    Route::get('/edit/{category}','edit')->middleware(authUser::class)->middleware(checkAccess::class . ':category_edit')->name('edit');
    Route::post('/update/{category}','update')->middleware(authUser::class)->middleware(checkAccess::class . ':category_edit')->name('update');
    Route::get('/delete/{category}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':category_delete')->name('delete');
    Route::get('/get/category/products/{category}','getCategoryProducts')->name('getCategoryProducts');
});
route::group([
    'prefix'=>'brand',
    'as'=>'brand.',
    'controller'=>BrandController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_create')->name('create');
    Route::post('/store','store')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_create')->name('store');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_list')->name('list');
    Route::get('/single/{brand}','single')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_single')->name('single');
    Route::get('/edit/{brand}','edit')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_edit')->name('edit');
    Route::post('/update/{brand}','update')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_edit')->name('update');
    Route::get('/delete/{brand}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':brand_delete')->name('delete');
});
route::group([
    'prefix'=>'discuntCode',
    'as'=>'discuntCode.',
    'controller'=>DiscuntCodeController::class,
],function(){
    Route::get('/create','create')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_create')->name('create');
    Route::post('/store','store')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_create')->name('store');
    Route::get('/list','list')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_list')->name('list');
    Route::get('/edit/{discuntCode}','edit')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_edit')->name('edit');
    Route::post('/update/{discuntCode}','update')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_edit')->name('update');
    Route::get('/delete/{discuntCode}','delete')->middleware(authUser::class)->middleware(checkAccess::class . ':discuntCode_delete')->name('delete');
    Route::post('/checkCode','checkCode')->name('checkCode');
});







route::group([
    'prefix'=>'logo',
    'as'=>'logo.',
    'controller'=>HeaderSettingController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':logo')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':logo')->name('store');
});
route::group([
    'prefix'=>'hero',
    'as'=>'hero.',
    'controller'=>HeroController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':hero_create')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':hero_create')->name('store');
    Route::get('/list','list')->middleware(checkAccess::class . ':hero_list')->name('list');
    Route::get('/edit/{hero}','edit')->middleware(checkAccess::class . ':hero_create')->name('edit');
    Route::post('/update/{hero}','update')->middleware(checkAccess::class . ':hero_create')->name('update');
    Route::get('/delete/{hero}','/delete')->middleware(checkAccess::class . ':hero_create')->name('/delete');
});
route::group([
    'prefix'=>'support_information',
    'as'=>'support_information.',
    'controller'=>SupportInformationController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':supportInfo_create')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':supportInfo_create')->name('store');
    Route::get('/list','list')->middleware(checkAccess::class . ':supportInfo_list')->name('list');
    Route::get('/edit/{support_information}','edit')->middleware(checkAccess::class . ':supportInfo_create')->name('edit');
    Route::post('/update/{support_information}','update')->middleware(checkAccess::class . ':supportInfo_create')->name('update');
    Route::get('/delete/{support_information}','delete')->middleware(checkAccess::class . ':supportInfo_create')->name('delete');
});
route::group([
    'prefix'=>'advertisement',
    'as'=>'advertisement.',
    'controller'=>AdvertisementController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':advertisment_create')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':advertisment_create')->name('store');
});
route::group([
    'prefix'=>'product_label',
    'as'=>'product_label.',
    'controller'=>ProductLabelsController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':product_label')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':product_label')->name('store');
});
route::group([
    'prefix'=>'staticUser',
    'as'=>'staticUser.',
    'controller'=>StaticUserController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':staticUser_create')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':staticUser_create')->name('store');
    Route::get('/list','list')->middleware(checkAccess::class . ':staticUser_list')->name('list');
    Route::get('/edit/{staticUser}','edit')->middleware(checkAccess::class . ':staticUser_edit')->name('edit');
    Route::post('/update/{staticUser}','update')->middleware(checkAccess::class . ':staticUser_edit')->name('update');
    Route::get('/delete/{staticUser}','delete')->middleware(checkAccess::class . ':staticUser_delete')->name('delete');
});
route::group([
    'prefix'=>'banner',
    'as'=>'banner.',
    'controller'=>BannerController::class,
],function(){
    Route::get('/create','create')->middleware(checkAccess::class . ':banner')->name('create');
    Route::post('/store','store')->middleware(checkAccess::class . ':banner')->name('store');
});
Route::get('check',function(){
    $result['check']=Auth::check();
    if(Auth::check()){
        $result['user']=Auth::user();
        $result['user']->roles;
    }
    dd($result);
});
Route::group([
    'prefix'=>'address',
    'as'=>'address.',
    'controller'=>AddressController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/get/address/{address}','getAddress')->name('getAddress');
    Route::post('/update/{address}','update')->name('update');
    Route::get('/delete/{address}','delete')->name('delete');
    Route::post('/get/cities','getCities')->name('getCities');
    Route::post('/create/ajax','createAjax')->name('createAjax');
});

Route::get('/contactUs' , [UserController::class , 'contactUs']);



