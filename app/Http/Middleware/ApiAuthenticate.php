<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Custom API authentication
 * Super Basic api_token Authentication
 *
 * Class ApiAuthenticate
 * @package App\Http\Middleware
 */
class ApiAuthenticate
{
    private const API_TOKEN_KEY = 'api_token';

    public function handle($request, Closure $next)
    {
        if (!$request->expectsJson()) { // redirect request that doesn't have "Accept" : "application/json" to web ui.
            return route('login');
        }
        try {
            $user = User::where(self::API_TOKEN_KEY, $request->only(self::API_TOKEN_KEY))->firstOrFail();
            Auth::setUser($user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to Authenticate.'], 403); //HTTP Status Code 403: The server understood the request but refuses to authorize it.
        }

        return $next($request);
    }
}
