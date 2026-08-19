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
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use App\Models\hero;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\storage;
class HeroController extends Controller
{
    public function create(){
        $categories=category::all();
        return view('admin.hero.create',['categories'=>$categories]);
    }
    public function store(Request $request){
        // dd($request->all());

        $background_image_name=$request->background_image_path->getClientOriginalName();
        $background_image_path=$request->file("background_image_path")->storeAs("hero_medias",$background_image_name,"public");

        $hero_image_name=$request->hero_image_path->getClientOriginalName();
        $hero_image_path=$request->file("hero_image_path")->storeAs("hero_medias",$hero_image_name,"public");
        
        hero::create([
            'title'=>$request->title,
            'summary'=>$request->summary,
            'addres'=>"category/".$request->addres,
            'background_image_path'=>$background_image_path,
            'hero_image_path'=>$hero_image_path,
            'is_active'=>$request->is_active,
        ]);
        return to_route('hero.list');
    }
    public function list(){
        $heros=hero::all();
        return view('admin.hero.list',['heros'=>$heros]);
    }
    public function edit(Request $request ,hero $hero){
        dd($request->all());
    }
    public function update(Request $request ,hero $hero){
        dd($request->all());
    }
    public function delete(Request $request ,hero $hero){
        dd($request->all());
    }
}
