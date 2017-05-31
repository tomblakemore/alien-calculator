<?php

namespace App\Http\Middleware;

use Closure;

class AllowAjaxOnly
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->ajax()) {
            return response('', 405); // Method Not Allowed
        }

        return $next($request);
    }
}
