<?php

namespace App\Http\Middleware;

use Closure;

class NegahbanAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * * admin 7 is super admin
     */
    public function handle($request, Closure $next)
    {
        $user=$request->user();
        if( $user && $user->admin =='1'||$user->admin =='7'){
            return $next($request);

        }
        abort(404,'Access Denied ');
    }

}
