<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\support_information;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class SupportInformationController extends Controller
{
    public function create(){
        $flag=false;
        $SI = support_information::all();
        if(count($SI)<4){
            $flag=true;
        }
        return view('admin.support_information.create' ,['flag'=>$flag]);
    }
    public function store(Request $request){
        $fullName=str::uuid().$request->image->getClientOriginalName();
        $path=$request->file('image')->storeAs("support_informations_images","$fullName","public");
        support_information::create([
            'title'=>$request->title,
            'summary'=>$request->summary,
            'image'=>$path,
        ]);
        return to_route('support_information.list');
    }
    public function list(){
        $SI=support_information::all();
        return view('admin.support_information.list',['support_informations'=>$SI]);
    }
    public function edit( support_information $support_information){
        return view("admin.support_information.edit",['support_information'=>$support_information]);
        dd('edit');
    }
    public function update(Request $request , support_information $support_information){
        $support_information->title=$request->title;
        $support_information->summary=$request->summary;
        if(isset($request->image)){
            Storage::disk('public')->delete("user_medias/".$support_information->path);
            $fullName=str::uuid().$request->image->getClientOriginalName();
            $path=$request->file('image')->storeAs("support_informations_images","$fullName","public");
            $support_information->image=$path;
        }
        $support_information->save();
        return to_route('support_information.list');
        dd('update');
    }   
    public function delete(support_information $support_information){
        Storage::disk('public')->delete("user_medias/".$support_information->path);
        $support_information->delete();
        return to_route('support_information.list');
        // dd('delete');
    }
}
