<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class RoleMiddleware {
    public function handle(Request $request, Closure $next, ...$roles) {
        $user = User::find($request->session()->get('user_id'));
        if (!$user || !in_array($user->role, $roles)) {
            abort(403);
        }
        return $next($request);
    }
}
