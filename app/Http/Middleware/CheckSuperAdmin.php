<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 3 || Auth::user()->role == 4) {
                return redirect('admin/dashboard');
            }
            elseif(Auth::user()->role == 1){
                return redirect('/');
            }
        }
        return $next($request);
    }
}
