<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 認証済でなければ存在しないページへ移動
        $is_auth = Auth::check();
        if (!$is_auth) {
            return abort(404);
        }

        // 認証ユーザーのroleがadminじゃなかったらabort(404)
        $role = Auth::user()->role;

        if ($role === 'admin') {
            return $next($request);
        } else {
            return abort(404);
        }
    }
}
