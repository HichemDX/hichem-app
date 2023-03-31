<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnserUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
      if(Auth::check()){
        if ($request ->user()->roles()->where('name', $role)->exists()) {
        return $next($request);
      }else{
        return  redirect('/home')->with('message', 'u can"t access this page because you are not admin');
      }
      }else{
        return  redirect('/login')->with('message', 'u can"t access this page because you are not admin');

      }
      
        abort(403);

  
    }
}
