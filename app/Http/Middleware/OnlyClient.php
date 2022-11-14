<?php

namespace App\Http\Middleware;

use auth;
use Closure;
use Illuminate\Http\Request;

class OnlyClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role_id != 2) {
            return redirect('books');
        }
        return $next($request);
    }
}