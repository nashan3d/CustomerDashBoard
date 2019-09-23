<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;

class IsAdmin
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
        if (auth()->user() &&  
              auth()->user()->id == Role::where('role_desc','admin')->first()->user_id) {
            return $next($request);    

         }
    
        return redirect('/login');
    }
}
