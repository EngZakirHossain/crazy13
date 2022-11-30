<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAccountStatus
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
          if (Auth::user()->status == 2) {
            return redirect('admin/dashboard/inactive');
          }
        }
        return $next($request);
    }
}
