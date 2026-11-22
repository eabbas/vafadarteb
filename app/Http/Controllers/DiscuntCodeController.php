<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discunt_code;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;
use App\Models\headerSetting;
use App\Models\hero;
use App\Models\category;
use App\Models\product;
use App\Models\address;
use App\Models\brand;
use App\Models\order;
use App\Models\cart;
use App\Models\advertisement;
use App\Models\referralCode;
use App\Models\product_labels;
use App\Models\phone_code;
use App\Models\staticUser;
use App\Models\support_information;
use App\Models\banner;
use App\Models\category_discunt_code;
use App\Models\product_discunt_code;
use App\Models\user_discunt_code;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
use Illuminate\Validation\Rule;
class DiscuntCodeController extends Controller
{

    public function create(){
        $products   = product::select('id', 'title','price')->get();
        $users      = User::select('id', 'name', 'phoneNumber')->get();
        $categories = category::select('id', 'title')->get();
        return view('admin.discunt_code.create', [
            'products'   => $products,
            'users'      => $users,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate(
            [
                'title' => ['required'],
                'code'  => ['required', 'unique:discunt_codes,code'],
            ],
            [
                'title.required' => 'فیلد مورد نظر را پر کنید',
                'code.required'  => 'فیلد مورد نظر را پر کنید',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
            ]
        );   
        // dd($request->all());

        if($request->discunt_type=='percent'){
            $validate=$request->validate(
            [
                'title'=>['required'],
                'code'=>['required', 'unique:discunt_codes,code'],
                'number' => ['required', 'numeric', 'min:0', 'max:100'],
            ],[
                'title.required'=>'فیلد مورد نظر را پر کنید',
                'code.required'=>'فیلد مورد نظر را پر کنید',
                'number.required'=>'فیلد مورد نظر را پر کنید',
                'number.numeric'=>'فیلد مورد نظر باید عددی پر شود',
                'number.min'=>'مقدار باید حداقل 0 باشد',
                'number.max'=>'مقدار باید حداکثر 100 باشد',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
            ]);
            $value=$validate['number'];
        }
        if($request->discunt_type=='number'){
            $validate=$request->validate(
            [
                'title'=>['required'],
                'code'=>['required', 'unique:discunt_codes,code'],
                'price'  => ['required', 'numeric', 'min:0'],
            ],[
                'title.required'=>'فیلد مورد نظر را پر کنید',
                'code.required'=>'فیلد مورد نظر را پر کنید',
                'price.required'=>'فیلد مورد نظر را پر کنید',
                'price.numeric'=>'فیلد مورد نظر باید عددی پر شود',
                'price.min'=>'مقدار باید حداقل 0 باشد',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
            ]);
            $value=$validate['price'];
        }


        $discunt_code=discunt_code::create([
            'title'=>$validate['title'],
            'code'=>$validate['code'],
            'discunt_type'=>$request['discunt_type'],
            'discunt_value'=>$value,
            'is_active'=>$request['is_active'] ?? 0,
            'free_shipping'=>$request['free_shipping'] ?? 0,
            'usage_limit'=>$request['usage_limit'] ?? null,
            'start_date'=>$request['start_date'] ?? null,
            'end_date'=>$request['end_date'] ?? null,
        ]);
        if(isset($request['products'])){
            foreach ($request['products'] as $product_id) {
                product_discunt_code::create([
                    'product_id'=>$product_id,
                    'discunt_code_id'=>$discunt_code->id,
                ]);
            }
        }
        if(isset($request['users'])){
            foreach ($request['users'] as $user_id) {
                user_discunt_code::create([
                    'user_id'=>$user_id,
                    'discunt_code_id'=>$discunt_code->id,
                ]);
            }

        }
        if(isset($request['categories'])){
            foreach ($request['categories'] as $category_id) {
                category_discunt_code::create([
                    'category_id'=>$category_id,
                    'discunt_code_id'=>$discunt_code->id,
                ]);
            }

        }
        return to_route('discuntCode.list');
        dd('store');
    }
    public function list(){
        $codes=discunt_code::all();
        return view('admin.discunt_code.list',['codes'=>$codes]);
        dd('list');
    }
    public function edit(discunt_code $discuntCode){
        $products   = product::select('id', 'title','price')->get();
        $users      = User::select('id', 'name', 'phoneNumber')->get();
        $categories = category::select('id', 'title')->get();
        $discuntCode->products;
        $discuntCode->categories;
        $discuntCode->users;
        // dd($discuntCode);
        return view('admin.discunt_code.edit', [
            'discuntCode'=>$discuntCode,
            'products'   => $products,
            'users'      => $users,
            'categories' => $categories,
        ]);
        dd('edit');
    }
    public function update(Request $request , discunt_code $discuntCode){
        // dd($request->all());
        $validate = $request->validate(
            [
                'title' => ['required'],
                'code' => [
                    'required',
                    Rule::unique('discunt_codes', 'code')->ignore($discuntCode->id)
                ],  
            ],
            [
                'title.required' => 'فیلد مورد نظر را پر کنید',
                'code.required'  => 'فیلد مورد نظر را پر کنید',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
            ]
        );   
        // dd($request->all());

        if($request->discunt_type=='percent'){
            $validate=$request->validate(
            [
                'title'=>['required'],
                'code' => [
                    'required',
                    Rule::unique('discunt_codes', 'code')->ignore($discuntCode->id)
                ],  
                'number' => ['required', 'numeric', 'min:0', 'max:100'],
            ],[
                'title.required'=>'فیلد مورد نظر را پر کنید',
                'code.required'=>'فیلد مورد نظر را پر کنید',
                'number.required'=>'فیلد مورد نظر را پر کنید',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
                'number.numeric'=>'فیلد مورد نظر باید عددی پر شود',
                'number.min'=>'مقدار باید حداقل 0 باشد',
                'number.max'=>'مقدار باید حداکثر 100 باشد',
            ]);
            $value=$validate['number'];
        }
        if($request->discunt_type=='number'){
            $validate=$request->validate(
            [
                'title'=>['required'],
                'code' => [
                    'required',
                    Rule::unique('discunt_codes', 'code')->ignore($discuntCode->id)
                ],  
                'price'  => ['required', 'numeric', 'min:0'],
            ],[
                'title.required'=>'فیلد مورد نظر را پر کنید',
                'code.required'=>'فیلد مورد نظر را پر کنید',
                'price.required'=>'فیلد مورد نظر را پر کنید',
                'code.unique'    => 'این کد تخفیف قبلاً ثبت شده است',
                'price.numeric'=>'فیلد مورد نظر باید عددی پر شود',
                'price.min'=>'مقدار باید حداقل 0 باشد',
            ]);
            $value=$validate['price'];
        }


        $discuntCode->title = $validate['title'];
        $discuntCode->code = $validate['code'];
        $discuntCode->discunt_type = $request['discunt_type'];
        $discuntCode->discunt_value = $value;
        $discuntCode->is_active = $request['is_active'] ?? 0;
        $discuntCode->free_shipping = $request['free_shipping'] ?? 0;
        $discuntCode->usage_limit = $request['usage_limit'] ?? null;
        $discuntCode->start_date = $request['start_date'] ?? null;
        $discuntCode->end_date = $request['end_date'] ?? null;
        $discuntCode->save();


        $products=$discuntCode->products->pluck('id')->toArray();
        $categories=$discuntCode->categories->pluck('id')->toArray();
        $users=$discuntCode->users->pluck('id')->toArray();

        if(isset($request['removed_products'])){
            if(count($request['removed_products'])>0){
                foreach ($request['removed_products'] as $product) {
                    product_discunt_code::where('product_id',$product)->delete();
                }
            }            
        }
        if(isset($request['removed_users'])){
            if(count($request['removed_users'])>0){
                foreach ($request['removed_users'] as $user) {
                    user_discunt_code::where('user_id',$user)->delete();
                }
            }            
        }
        if(isset($request['removed_categories'])){
            if(count($request['removed_categories'])>0){
                foreach ($request['removed_categories'] as $category) {
                    category_discunt_code::where('category_id',$category)->delete();
                }
            }            
        }

        if(isset($request['products'])){
            foreach ($request['products'] as $product_id) {
                if(!in_array($product_id,$products)){
                    product_discunt_code::create([
                        'product_id'=>$product_id,
                        'discunt_code_id'=>$discuntCode->id,
                    ]);
                }
            }
        }
        if(isset($request['users'])){
            foreach ($request['users'] as $user_id) {
                if(!in_array($user_id,$users)){
                    user_discunt_code::create([
                        'user_id'=>$user_id,
                        'discunt_code_id'=>$discuntCode->id,
                    ]);
                }
            }
        }
        if(isset($request['categories'])){
            foreach ($request['categories'] as $category_id) {
                if(!in_array($category_id,$categories)){
                    category_discunt_code::create([
                        'category_id'=>$category_id,
                        'discunt_code_id'=>$discuntCode->id,
                    ]);
                }
            }
        }

        
        
        

        return to_route('discuntCode.list');
    }
    public function delete(discunt_code $discuntCode){
        if(count($discuntCode->products)>0){
            foreach ($discuntCode->products as $product) {
                $product->pivot->delete();
            }
        }
        if(count($discuntCode->users)>0){
            foreach ($discuntCode->users as $user) {
                $user->pivot->delete();
            }
        }
        if(count($discuntCode->categories)>0){
            foreach ($discuntCode->categories as $category) {
                $category->pivot->delete();
            }
        }
        $discuntCode->delete();
        return to_route('discuntCode.list');
        dd('delete');
    }
    public function checkCode(Request $request){
        $code=discunt_code::where('code',$request->code)->first();
        if($code){
            if($code->is_active==1){
                $access=true;
            }else{
                $access=false;
            }
        }else{
            $access='Unavailable';
        }
        return response()->json(['access'=>$access , 'discuntCode'=>$code]);
    }
}
