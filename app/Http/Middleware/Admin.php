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
        if (Auth::user() && Auth::user()->admin == User::ADMIN or Auth::user()->admin == User::SUPER_ADMIN) {
            return $next($request);
        }

        return redirect('/admin/auth/login');
    }
}
