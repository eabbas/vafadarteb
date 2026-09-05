<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staticUser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class StaticUserController extends Controller
{
    public function create(){
        return view('admin.staticUser.create');
        dd('create');
    }
    public function store(Request $request){
        staticUser::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'message'=>$request->message,
        ]);
        return to_route('staticUser.list');
        dd('store');
    }
    public function list(){
        $users=staticUser::all();
        return view('admin.staticUser.list',['users'=>$users]);
        dd('list');
    }
    public function delete(staticUser $staticUser){
        $staticUser->delete();
        return to_route('staticUser.list');
        dd('delete');
    }
    public function edit(Request $request , staticUser $staticUser){
        return view('admin.staticUser.edit',['user'=>$staticUser]);
        dd('edit');
    }
    public function update(Request $request , staticUser $staticUser){
        $staticUser->name=$request->name;
        $staticUser->role=$request->role;
        $staticUser->message=$request->message;
        $staticUser->save();
        return to_route('staticUser.list');
        dd('update');
    }
}
