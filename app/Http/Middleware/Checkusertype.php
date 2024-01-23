<?php

namespace App\Http\Middleware;

use Closure;

class CheckUsertype
{
    public function handle($request, Closure $next, $usertype)
    {
        if ($request->user() && $request->user()->usertype == $usertype) {
            return $next($request);
        }

        abort(403, 'Unauthorized.');
    }
}
