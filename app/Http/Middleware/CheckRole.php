<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = Auth::user();

        if (!($user instanceof User) || !$user->hasRole($role)) {
            abort(403);
        }

        return $next($request);
    }
}
