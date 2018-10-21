<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            switch (Auth::user()->type) {
                case User::STUDENT:
                        return redirect('/home');
                    break;
                    case User::TEACHER:
                        return redirect('/teacher');
                    break;
                    case User::ADMIN:
                         return redirect('/admin');
                    break;
            }
            return redirect('/home');
        }

        return $next($request);
    }
}
