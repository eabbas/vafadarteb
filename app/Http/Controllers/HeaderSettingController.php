<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\headerSetting;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
class HeaderSettingController extends Controller
{
    public function create(){
        return view('admin.logo.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $fullName=$request->logo_path->getClientOriginalName();
        $path=$request->file("logo_path")->storeAs("logo",$fullName,"public");
        headerSetting::upsert(['logo_path'=>$path],["id"],['logo_path']);
        return redirect('/');
    }
}
