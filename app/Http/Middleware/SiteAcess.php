<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class SiteAcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response | Redirector | RedirectResponse
    {
        if(Route::currentRouteName() != 'coming' && now()->lessThan('2024-08-15 00:00:00'))
            return redirect()->route('coming');
        return $next($request);
    }
}
