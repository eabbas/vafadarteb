<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class checkUserExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $result= '';
        $user=User::where('phoneNumber',$request->phoneNumber)->first();
        // dd($user);
        if($user){
            if(Hash::check($request->password,$user->password)){
                return $next($request);
            }
        }
        return to_route('user.loginPage');
    }
}
