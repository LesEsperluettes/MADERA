<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user_role = Role::where('nom',$role)->first();

        if($user_role == null || $request->user() == null || !($request->user()->hasRole($user_role))){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
