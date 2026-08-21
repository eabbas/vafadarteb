<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\support_information;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;

class SupportInformationController extends Controller
{
    public function create(){
        return view('admin.support_information.create');
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
    public function edit( support_information $SI){
        dd('edit');
    }
    public function update(Request $request , support_information $SI){
        dd('update');
    }
    public function delete(support_information $SI){
        dd('delete');
    }
}
