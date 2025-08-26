<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Symfony\Component\HttpFoundation\Response;

class RepairerAuthAfter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('rid'))
        {
            
           return redirect('/Repairer-Login');
           
        }
        return $next($request);
    }
}
