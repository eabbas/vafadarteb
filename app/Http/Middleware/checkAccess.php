<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

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
            return redirect('/');
        }
        return $next($request);
    }
}
