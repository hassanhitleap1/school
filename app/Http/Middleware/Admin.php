<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class Admin
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
        if (Auth::user() &&  Auth::user()->type == User::ADMIN ) {
            return $next($request);
        }

        return redirect('/admin');
    }
}
