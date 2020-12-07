<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
        if(auth()->check() &&  auth()->user()->level == 1){
            return $next($request);
        }
        abort(404, 'Not Found');
        return redirect('/')->with('error',"You don't have admin access.");
    }
}
