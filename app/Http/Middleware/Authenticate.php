<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (!is_null(request()->user())) {
            return $next($request);
        }

        return redirect('login');
    }
}
