<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class checkAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $permision=null): Response
    {
        
        if(Auth::check()){
            if($permision){
                if(!Gate::allows('access',[$permision])){
                    return redirect('/');
                }
            }else{
                return redirect('/');
            }
        }else{
            return to_route('user.loginPage');
        }
        return $next($request);
    }
}
