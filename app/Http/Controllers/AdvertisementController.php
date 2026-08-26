<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\advertisement;
use App\Models\category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class AdvertisementController extends Controller
{
    public function create(){
        $categories=category::all();
        $advertisement=advertisement::find(1);
        return view('admin.advertisement.create',['categories'=>$categories,'advertisement'=>$advertisement]);
    }
    public function store(Request $request ){
        $ad=advertisement::find(1);
        if(isset($request->image_path)){
            Storage::disk('public')->delete($ad->image_path);
            $fullName=$request->image_path->getClientOriginalName();
            $path=$request->file("image_path")->storeAs("advertisement_medias",$fullName,"public");
        }else{
            $path=$ad->image_path;
        }
        if(isset($request->is_active)){
            $is_active=$request->is_active;
        }else{
            $is_active=0;

        }
        advertisement::upsert(
        [
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'summary'=>$request->summary,
            'category_id'=>$request->category_id,
            'image_path'=>$path,
            'is_active'=>$is_active,
            'id'=>1
        ],[
            "id"
        ],[
            'title',
            'subtitle',
            'summary',
            'category_id',
            'image_path',
            'is_active'
        ]);
        return redirect('/');
    }
}
