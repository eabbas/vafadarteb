<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\attribute;
use App\Models\user;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product_attribute;
use App\Models\package;
use App\Models\headerSetting;
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function create(){
        return view('brand.create');
        dd('create');
    }
    public function store(Request $request){
        // dd($request->all());

        $validate=$request->validate(
        [
            'title'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        $path=null;
        if(isset($request->logo_path) && $request->logo_path!=null){
            $fullName=Str::uuid().$request->logo_path->getClientOriginalName();
            $path=$request->file("logo_path")->storeAs("brand_medias",$fullName,"public");
        }
        $created_brand=brand::create([
            'title'=>$validate['title'],
            'logo_path'=>$path,
            'slug'=>$request['slug'],
            'description'=>$request['description'],
            'show_in_home'=>$request['show_in_home'],
            'is_active'=>$request['is_active'],
        ]);
        return to_route('brand.list');
        dd('store');
    }
    public function list(){
        $brands=brand::all();
        return view('brand.list',['brands'=>$brands]);
        dd('list');
    }
    public function single(brand $brand){
        return view('brand.single',['brand'=>$brand]);
        dd('single');
    }
    public function edit(brand $brand){
        return view('brand.edit',['brand'=>$brand]);
        dd('edit');
    }
    public function update(Request $request, brand $brand){
        // dd($request->all());
        $validate=$request->validate(
        [
            'title'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        if(isset($request->logo_path)){
            $fullName=Str::uuid().$request->logo_path->getClientOriginalName();
            $path=$request->file("logo_path")->storeAs("brand_medias",$fullName,"public");
            if($brand->logo_path!=null){
                Storage::disk('public')->delete($brand->logo_path);
            }
            $brand->logo_path=$path;
        }
        $brand->title=$validate['title'];
        $brand->slug=$request['slug'];
        $brand->description=$request['description'];
        $brand->show_in_home=$request['show_in_home'];
        $brand->is_active=$request['is_active'];
        $brand->save();
        return to_route('brand.list');
        dd('update');
    }
    public function delete(brand $brand){
        if($brand->logo_path!=null){
            Storage::disk('public')->delete($brand->logo_path);
        }
        foreach ($brand->products as $product) {
            $product->brand_id=null;
            $product->save();
        }
        $brand->delete();
        return to_route('brand.list');
        dd('delete');
    }
}
