<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::User()->isban)
        {
            $banned = Auth::user()->isban =="1";
            Auth::logout();
            if($banned==1){
                $message = ' votre compte est bloquer ,contacter l Admin ';
            }
            return redirect()->route('login')
                ->with('status',$message)
                ->withErrors(['email'=>'votre compte est bloquer ,contacter l Admin']);
        }
        return $next($request);
    }
}
