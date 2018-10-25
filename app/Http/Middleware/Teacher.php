<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class Teacher
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
        //&&  Auth::user()->type == User::TEACHER 
        if (Auth::user() ) {
            return $next($request);
        }

        return redirect('/teacher/login');
    }
}
