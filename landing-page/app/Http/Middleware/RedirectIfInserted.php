<?php

namespace App\Http\Middleware;

class RedirectIfInserted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function handle($request)
    {
        return $next($request);
    }
}
