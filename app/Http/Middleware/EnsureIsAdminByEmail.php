<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureIsAdminByEmail
{
    public function handle(Request $request, Closure $next)
    {
        $adminEmail = env('ADMIN_EMAIL');
        if ($request->input('email') === $adminEmail) {
            return $next($request);
        }

        // 管理者でない場合はホームページにリダイレクト
        return redirect('/');
    }
}
