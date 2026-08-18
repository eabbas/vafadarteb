<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
class UserController extends Controller
{

    public function create(){
        $roles=role::all();
        return view('admin.user.create',['roles'=>$roles]);
    }
    public function store(Request $request){

        $validation=$request->validate(
            [
                'name'=>['required','max:255'],
                'family'=>['required','max:255'],
                'phoneNumber'=>['required','max:11'],
                'email'=>['required','max:255'],
                'password'=>['required','max:255'],
            ],[
                'name.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'name.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'family.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'family.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'phoneNumber.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'phoneNumber.max'=>'تعداد کاراکتر های مجاز 11 تا میباشد',
                'email.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'email.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'password.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'password.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
            ]
        );

        $user=User::where('phoneNumber',$validation['phoneNumber'])->first();
        if($user){
            Auth::login($user);
            return to_route("user.profile");
        }
        $createdUser=User::create([
            "name"=>$validation['name'],
            "family"=>$validation['family'],
            "phoneNumber"=>$validation['phoneNumber'],
            "email"=>$validation['email'],
            "password"=>$validation['password'],
        ]);
        $role=role::where('ea_title','user')->first();
        role_user::create([
            'user_id'=>$createdUser->id,
            'role_id'=>$role->id,
        ]);
        Auth::login($createdUser);
        return to_route('user.profile');
    }


    public function createUser(Request $request){

        $validation=$request->validate(
            [
                'name'=>['required','max:255'],
                'family'=>['required','max:255'],
                'phoneNumber'=>['required','max:11'],
                'email'=>['required','max:255'],
                'password'=>['required','max:255'],
            ],[
                'name.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'name.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'family.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'family.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'phoneNumber.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'phoneNumber.max'=>'تعداد کاراکتر های مجاز 11 تا میباشد',
                'email.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'email.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'password.requi$'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'password.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
            ]
        );

        $user=User::where('phoneNumber',$validation['phoneNumber'])->first();
        if($user){
            return 'کاربری با همین مشخصات از قبل ثبت شده';   
        }
        $createdUser=User::create([
            "name"=>$validation['name'],
            "family"=>$validation['family'],
            "phoneNumber"=>$validation['phoneNumber'],
            "email"=>$validation['email'],
            "password"=>$validation['password'],
        ]);
        if(isset($request->roles)){

            foreach ($request->roles as $role_id) {
                role_user::create([
                    'user_id'=>$createdUser->id,
                    'role_id'=>$role_id,
                ]);
            }
        }else{
            $role=role::where('ea_title','user')->first();
            role_user::create([
                'user_id'=>$createdUser->id,
                'role_id'=>$role->id,
            ]);
        }
        return to_route('user.list');
    }
    public function login(Request $request){
        $user=User::where('phoneNumber',$request->phoneNumber)->first();
        Auth::login($user);
        return to_route('user.profile');
    }
    public function list(){
        $users=User::all();
        return view('admin.user.list',['users'=>$users]);
    }
    public function single(User $user){
        return view('admin.user.single',['user'=>$user]);
    }
    public function edit(User $user){
        $user->roles;
        $roles=role::all();
        return view('admin.user.edit',['user'=>$user , 'roles'=>$roles]);
    }
    public function update(Request $request , User $user){
        // dd($request->all());
        $user->name=$request->name;
        $user->family=$request->family;
        $user->phoneNumber=$request->phoneNumber;
        $user->email=$request->email;
        if($request->password!=null){
            $user->password=Hash::make($request->password);
        }
        $user->save();
        $user->roles;
        foreach ($user->roles as $role) {
            $role->pivot->delete();
        }
        if(isset($request->roles)){
            foreach ($request->roles as $role_id) {
                role_user::create([
                    'user_id'=>$user->id,
                    'role_id'=>$role_id,
                ]);
            }
        }else{
            $role=role::where('ea_title','user')->first();
            role_user::create([
                'user_id'=>$user->id,
                'role_id'=>$role->id,
            ]);
        }
        return to_route('user.list');
    }
    //اینپوت ها با ajax
    // public function editProfile(Request $request){
    //     $user=Auth::user();
    //     if($request['name']!='path'){
    //         $user[$request['name']]=$request->value;
    //         $user->save();
    //     }else{
    //         if($user->path!=null){
    //             storage::disk('public')->delete("user_images/".$request['value']);
    //         }else{
    //             $format=$request['value']->getClientOriginalExtension();
    //             $fullName=time().$request['value']->getClientOriginalName();
    //             $request['value']->storeAs("user_images","$fullName","public");
    //         }
    //     }
    //     return response()->json($request->value);
    // }

    public function editProfile(Request $request , User $user){
        if($request->name!=null){
            $user->name=$request->name;
        }
        if($request->family!=null){
            $user->family=$request->family;
        }
        if($request->phoneNumber!=null){
            $user->phoneNumber=$request->phoneNumber;
        }
        if($request->email!=null){
            $user->email=$request->email;
        }
        $user->save();
        return response()->json($user);
    }

    public function changeAvatar(Request $request , User $user){
        Log::info($request->all());
        $file=$request->file('avatar');
        $fullName=Str::uuid().$file->getClientOriginalName();
        $extension=$file->getClientOriginalExtension();
        Log::info($fullName);
        Log::info($extension);
        if($user->path!=null){
            storage::disk('public')->delete("user_medias/".$user->path);
            $user->path=null;
        }
        if($user->path==null){
            $file->storeAs("user_medias","$fullName","public");
            $user->path=$fullName;
        }
        $user->save();
        return response()->json([
            'success' => true,
            'avatar_url' => asset('storage/user_medias/' . $user->path)
        ]);
        // return response()->json('moz');
    }

    public function changePassword(Request $request , User $user){
        Log::info($request->password);
        $user->password=Hash::make($request->password);
        $user->save();
        return response()->json(true);
    }

    public function delete(User $user){
        
        foreach ($user->roles as $role) {
            $role->pivot->delete();
        }
        $user->delete();
        return to_route('user.list');
    }


    public function loginPage(){
        // dd('loginPage');
        return view('loginpage');
    }

    public function logOut(){
        Auth::logout();
        return to_route('firstpage');
        // dd('logOut');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function profile(){
        return view('profile');
    }
}
