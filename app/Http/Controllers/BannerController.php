<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
class BannerController extends Controller
{
    public function create(){
        return view('admin.banner.create');
    }
    public function store(Request $request){
        $fullName=Str::uuid().$request['image']->getClientOriginalName();
        if($banner=banner::find(1)){
            Storage::disk('public')->delete("banner_media/".$banner->image);
        }
        $path=$request->file('image')->storeAs('banner_media',"$fullName","public");
        banner::upsert(['image' =>$path ,'id'=>1],['id'] ,['image']);
        return redirect('/');
    }
}
