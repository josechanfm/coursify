<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $url = $request->url();

        if( !$request->expectsJson() ) {
            // session 過期
            if (strpos($url, '/admin') !== false) {
                // 如果當前是在 /manage
                return route('admin.login');
            } else {
                return route('login');
            }
        }
        return null;
    }
}
