<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        // &&  Auth::user()->type == User::ADMIN
        if (\Auth::check()) {
            return $next($request);
        }

        return redirect('/admin/login');
    }
}
