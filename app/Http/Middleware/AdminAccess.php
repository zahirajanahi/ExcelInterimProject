<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->hasAdminAccess()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}