<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Custom Authentication middleware
 * Redirect to login page if user is not authenticated
 *
 * Class WebAuthenticate
 * @package App\Http\Middleware
 */
class WebAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect(RouteServiceProvider::LOGIN);
        }

        return $next($request);
    }
}
