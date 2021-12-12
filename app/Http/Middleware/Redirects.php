<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Redirects
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role_id == 1)
        {
             redirect('admin/dashboard');
        } elseif (auth()->user()->role_id == 2)
        {
           redirect('veterinarian/dashboard');
        } else {
             redirect('veterinarian/dashboard');
        }
          return $next($request);
    }
}
