<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        if($request->input('email')){

            $user = User::where('email',$request->input('email'))->first();
            if ($user->permission != 1) {
                session()->flash('danger','你不是管理員');
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
