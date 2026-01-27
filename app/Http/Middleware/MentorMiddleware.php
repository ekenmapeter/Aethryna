<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MentorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || (!auth()->user()->isMentor() && !auth()->user()->isAdmin() && !auth()->user()->isCoach())) {
            // Coaches and Admins can also access mentor views usually, or strictly separate?
            // Assuming higher hierarchy access is allowed for now, or at least Admin.
            abort(403, 'Unauthorized. Mentor access required.');
        }

        return $next($request);
    }
}
