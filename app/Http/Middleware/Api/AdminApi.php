<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$guard='admin_api')
    {
        if (!Auth::guard($guard)->check()) {
            // session()->put('url.intended', url($request->getPathInfo()));
             return response()->json(['message'=>'UnAutanticated'],401);
        }

        // session()->forget('url.intended');
        return $next($request);

    }
}
