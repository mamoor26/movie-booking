<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class validuser
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

    if(Auth::check()){
         return $next($request);
    }
    else{
        return redirect()->route('registerform');
    }

    }
}
