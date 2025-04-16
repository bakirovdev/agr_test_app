<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, \Closure $next): Response
    {
        $user = request()->user();

        if (!$user) abort(401);

        $routePrefix = str_replace('/', '.', request()->route()->getPrefix());

        $route = explode('.', $routePrefix);

        if ($user->type !== $route[0]) {
            abort(403, 'You don\'t have role for this action');
        }

        return $next($request);
    }
}
