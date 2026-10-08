<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discunt_code;
class DiscuntCodeController extends Controller
{
    public function create(){
        return view('admin.discunt_code.create');
        dd('create');
    }
    public function store(Request $request){
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code= substr(str_shuffle(str_repeat($chars, 5)), 0,5);
        if(isset($request->code)){
            $code=$request->code;
        }
        $validate=$request->validate(
        [
            'title'=>['required'],
            // 'slug'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
            // 'slug.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        $discunt_code=discunt_code::create([
            'title'=>$validate['title'],
            'code'=>$code,
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
    public function update(Request $request , discunt_code $discunt_code){
        dd('update');
    }
    public function delete(discunt_code $discunt_code){
        dd('delete');
    }
}
