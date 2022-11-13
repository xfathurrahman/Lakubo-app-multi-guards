<?php

namespace App\Http\Middleware;

use Closure;

class LoggedIn
{

    public function handle($request, Closure $next)
    {
        if (!is_null(request()->user())) {
            return redirect('dashboard/');
        } else {
            return $next($request);
        }
    }
}
