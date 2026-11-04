<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class userrole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if(Auth::check()){

         if(Auth::user()->role=="admin"){
            return $next($request);

         }
         else{
            return redirect()->route('userweb');
         }

    }
    else{
        return redirect()->route('registerform');
    }
    }
}
