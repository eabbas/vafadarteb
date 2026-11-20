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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
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
        dd($request->all());
        $validate=$request->validate(
        [
            'title'=>['required'],
            'code'=>['required'],
            // 'slug'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
            'code.required'=>'فیلد مورد نظر را پر کنید',
            // 'slug.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        $discunt_code=discunt_code::create([
            'title'=>$validate['title'],
            'code'=>$validate['code'],
            'number'=>$request['number'],
            'percent'=>$request['percent'],
            'is_active'=>1,
        ]);
        return to_route('discuntCode.list');
        dd('store');
    }
    public function list(){
        $codes=discunt_code::all();
        return view('admin.discunt_code.list',['codes'=>$codes]);
        dd('list');
    }
    public function edit(discunt_code $discuntCode){
        // dd($discuntCode);
        return view('admin.discunt_code.edit',['discuntCode'=>$discuntCode]);
        dd('edit');
    }
    public function update(Request $request , discunt_code $discuntCode){
        // dd($request->all());
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code= substr(str_shuffle(str_repeat($chars, 5)), 0,5);
        if(isset($request->code)){
            $code=$request->code;
        }
        $discuntCode->title=$request->title;
        $discuntCode->code=$code;
        if(isset($request->percent)){
            $discuntCode->percent=$request->percent;
            $discuntCode->number=null;
        }else{
            $discuntCode->number=$request->number;
            $discuntCode->percent=null;
        }
        $discuntCode->is_active=$request->is_active;
        $discuntCode->save();
        return to_route('discuntCode.list');
    }
    public function delete(discunt_code $discuntCode){
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
